import { useEffect, useMemo, useRef, useState } from 'react';
import { Link, NavLink, Route, Routes, useLocation, useNavigate } from 'react-router-dom';
import { Download, Heart, Info, Library as LibraryIcon, LogIn, LogOut, Menu, Pause, Play, SkipBack, SkipForward, User, UserPlus, X } from 'lucide-react';

const API = `${window.location.protocol}//${window.location.hostname}/MusicFan`;
const asset = (path) => `${API}/${path.replaceAll('\\', '/')}`;

const songs = [
  [3, 'Wang Chung', 'Space Junk', 'Portada/SpaceJunk.jpg', 'music/Space Junk - Wang Chung.mp3'],
  [4, 'Joakim Karud', 'Dizzy', 'Portada/DizzyPortada.jpg', 'music/Dizzy - Joakim Karud (320).mp3'],
  [6, 'Bran Van 3000', 'Go Shopping', 'Portada/GoShoppingPortada.jpeg', 'music/Go Shopping - Bran Van 3000 (320).mp3'],
  [8, 'Interpol', 'Evil', 'Portada/InterpolPortada.jpg', 'music/Evil - Interpol.mp3'],
  [9, 'Interpol', 'PDA (2012 Remaster)', 'Portada/TurnBrightPortada.jpg', 'music/PDA (2012 Remaster).mp3'],
  [11, 'Interpol', 'Obstacle 1', 'Portada/InterpolPortada.jpg', 'music/Obstacle 1.mp3'],
  [7, 'Interpol', 'The Rover', 'Portada/TheRoverPortada.jpg', 'music/The Rover - Interpol.mp3'],
  [1, 'Radio Head', 'Creep', 'Portada/PortadaCreep.jpg', 'music/Creep - Radiohead.mp3'],
  [2, 'Radio Head', 'Weird Fishes', 'Portada/PortadaWeirdFishes.jpg', 'music/Weird Fishes Arpeggi - Radiohead.mp3'],
  [5, 'Aerosmith', 'Dream On', 'Portada/DreamOnPortada.jpg', 'music/Dream On - Aerosmith (320).mp3']
].map(([id, artist, title, cover, link]) => ({ id, artist, title, cover: asset(cover), link: asset(link) }));

function Layout({ children }) {
  const navigate = useNavigate();
  const [open, setOpen] = useState(false);
  const [session, setSession] = useState(null);

  useEffect(() => {
    fetch(`${API}/api/session.php`, { credentials: 'include' })
      .then(r => r.ok ? r.json() : null).then(setSession).catch(() => setSession(null));
  }, []);

  async function logout() {
    await fetch(`${API}/CerrarSession.php`, { credentials: 'include' });
    setSession(null); setOpen(false); navigate('/');
  }

  return <div className="app-shell">
    <header className="topbar">
      <Link className="brand" to="/"><span>M</span>usic <span>F</span>an <small>[Beta]</small></Link>
      <nav className="desktop-nav">
        <NavLink to="/" end>Inicio</NavLink>
        <NavLink to="/descargas">Descargas</NavLink>
        {session?.authenticated && <NavLink to="/biblioteca">Biblioteca</NavLink>}
        <NavLink to="/acerca">Acerca de nosotros</NavLink>
      </nav>
      <div className="account">
        {session?.authenticated ? <>
          <button className="icon-button" onClick={() => setOpen(!open)} aria-label="Cuenta"><User size={21}/></button>
          {open && <div className="account-menu">
            <Link to="/perfil" onClick={() => setOpen(false)}>Mi perfil</Link>
            <Link to="/biblioteca" onClick={() => setOpen(false)}>Biblioteca</Link>
            <button onClick={logout}><LogOut size={16}/> Cerrar sesión</button>
          </div>}
        </> : <>
          <Link className="small-link" to="/login"><LogIn size={16}/> Iniciar sesión</Link>
          <Link className="small-link primary" to="/registro"><UserPlus size={16}/> Registrarse</Link>
        </>}
      </div>
      <button className="mobile-menu" onClick={() => setOpen(!open)}><Menu/></button>
    </header>
    {open && <div className="mobile-nav">
      <NavLink to="/" end onClick={() => setOpen(false)}>Inicio</NavLink>
      <NavLink to="/descargas" onClick={() => setOpen(false)}>Descargas</NavLink>
      {session?.authenticated && <NavLink to="/biblioteca" onClick={() => setOpen(false)}>Biblioteca</NavLink>}
      <NavLink to="/acerca" onClick={() => setOpen(false)}>Acerca de nosotros</NavLink>
    </div>}
    <main>{children}</main>
    <footer>MusicFan · Proyecto académico · React + PHP + MySQL</footer>
  </div>;
}

function SongCard({ song, onPlay }) {
  return <article className="song-card">
    <img src={song.cover} alt={`Portada de ${song.title}`} />
    <div className="song-info"><span>{song.artist}</span><h3>{song.title}</h3></div>
    <button className="play-card" onClick={() => onPlay(song)}><Play size={18} fill="currentColor"/> Reproducir</button>
  </article>;
}

function Home() {
  const [current, setCurrent] = useState(null);
  return <>
    <section className="hero">
      <div><p className="eyebrow">MUSICFAN</p><h1>Tu música, <em>sin complicaciones.</em></h1><p>Explora canciones, reproduce tus favoritas y crea tu propia biblioteca.</p><div className="hero-actions"><Link to="/descargas" className="button primary">Explorar música</Link><Link to="/registro" className="button secondary">Crear cuenta</Link></div></div>
      <div className="hero-disc">♪</div>
    </section>
    <SongSection title="Lo más nuevo" items={songs.slice(0, 4)} onPlay={setCurrent}/>
    <SongSection title="Clásicos alternativos" items={songs.slice(4, 8)} onPlay={setCurrent}/>
    <SongSection title="Más música" items={songs.slice(8)} onPlay={setCurrent}/>
    {current && <MiniPlayer song={current} onClose={() => setCurrent(null)} />}
  </>;
}

function SongSection({ title, items, onPlay }) {
  return <section className="section"><div className="section-heading"><h2>{title}</h2><Link to="/descargas">Ver todo →</Link></div><div className="song-grid">{items.map(s => <SongCard key={s.id} song={s} onPlay={onPlay}/>)}</div></section>;
}

function MiniPlayer({ song, onClose }) {
  const audio = useRef(null); const [playing, setPlaying] = useState(false);
  useEffect(() => { audio.current?.play().then(() => setPlaying(true)).catch(() => {}); }, [song]);
  return <div className="mini-player"><img src={song.cover} alt=""/><div className="mini-meta"><strong>{song.title}</strong><span>{song.artist}</span></div><audio ref={audio} src={song.link} onEnded={() => setPlaying(false)} /><button onClick={() => { if (audio.current?.paused) { audio.current.play(); setPlaying(true); } else { audio.current.pause(); setPlaying(false); }}}>{playing ? <Pause/> : <Play/>}</button><a href={song.link} download><Download/></a><button onClick={onClose}><X/></button></div>;
}

function Login() {
  const [error, setError] = useState('');
  async function submit(e) {
    e.preventDefault(); setError(''); const body = new FormData(e.currentTarget);
    try { const r = await fetch(`${API}/setSession.php`, { method: 'POST', body, credentials: 'include' }); const text = await r.text();
      if (text.includes('Contraseña incorrecta') || text.includes('no existe')) { setError('Usuario o contraseña incorrectos.'); return; }
      window.location.href = '/MusicFan/react/';
    } catch { setError('No se pudo conectar con el servidor.'); }
  }
  return <AuthCard title="Iniciar sesión" subtitle="Accede a tu biblioteca y favoritos."><form onSubmit={submit} className="form"><label>Usuario<input name="User" required autoComplete="username" /></label><label>Contraseña<input name="Password" type="password" required autoComplete="current-password" /></label>{error && <div className="error">{error}</div>}<button className="button primary full"><LogIn size={18}/> Iniciar sesión</button><p>¿No tienes cuenta? <Link to="/registro">Regístrate</Link></p><Link to="/" className="back">Entrar como invitado</Link></form></AuthCard>;
}

function Register() {
  const [message, setMessage] = useState('');
  async function submit(e) { e.preventDefault(); const body = new FormData(e.currentTarget); if (body.get('Password') !== body.get('ConfirmPassword')) { setMessage('Las contraseñas no coinciden.'); return; } body.delete('ConfirmPassword'); try { const r = await fetch(`${API}/Registrar.php`, { method: 'POST', body, credentials: 'include' }); const text = await r.text(); if (text.includes('Advertencia') || text.includes('Error')) setMessage('El usuario o correo ya existe, o ocurrió un error.'); else { setMessage('Registro exitoso. Ahora puedes iniciar sesión.'); e.currentTarget.reset(); } } catch { setMessage('No se pudo conectar con el servidor.'); }}
  return <AuthCard title="Crear cuenta" subtitle="Únete a MusicFan y guarda tus canciones favoritas."><form onSubmit={submit} className="form"><label>Usuario<input name="User" maxLength="16" required /></label><label>Correo electrónico<input name="Correo" type="email" required /></label><label>Contraseña<input name="Password" type="password" required /></label><label>Confirmar contraseña<input name="ConfirmPassword" type="password" required /></label>{message && <div className="notice">{message}</div>}<button className="button primary full"><UserPlus size={18}/> Registrarse</button><p>¿Ya tienes cuenta? <Link to="/login">Inicia sesión</Link></p></form></AuthCard>;
}

function AuthCard({ title, subtitle, children }) { return <section className="auth-page"><div className="auth-card"><div className="auth-logo">MF</div><h1>{title}</h1><p>{subtitle}</p>{children}</div></section>; }

function Downloads() {
  const [playing, setPlaying] = useState(null);
  return <section className="page"><div className="page-title"><div><p className="eyebrow">CATÁLOGO</p><h1>Descargas</h1><p>Escucha y descarga las canciones disponibles en MusicFan.</p></div></div><div className="download-grid">{songs.map(song => <article className="download-card" key={song.id}><img src={song.cover} alt=""/><div><span>{song.artist}</span><h3>{song.title}</h3><div className="card-actions"><button onClick={() => setPlaying(playing === song.id ? null : song.id)}>{playing === song.id ? <Pause size={16}/> : <Play size={16}/>} {playing === song.id ? 'Pausar' : 'Escuchar'}</button><a href={song.link} download><Download size={16}/> Descargar</a></div>{playing === song.id && <audio src={song.link} autoPlay controls onEnded={() => setPlaying(null)}/>}</div></article>)}</div></section>;
}

function Library() {
  const [songs, setSongs] = useState([]); const [loading, setLoading] = useState(true); const [error, setError] = useState('');
  const load = () => fetch(`${API}/api/biblioteca.php`, { credentials: 'include' }).then(r => r.json()).then(d => { if (!d.authenticated) { setError('Debes iniciar sesión para acceder a tu biblioteca.'); return; } setSongs(d.songs || []); }).catch(() => setError('No se pudo cargar la biblioteca.')).finally(() => setLoading(false));
  useEffect(load, []);
  async function remove(id) { await fetch(`${API}/api/biblioteca.php`, { method: 'DELETE', credentials: 'include', headers: {'Content-Type':'application/json'}, body: JSON.stringify({ id }) }); load(); }
  return <section className="page"><div className="page-title"><div><p className="eyebrow">TU COLECCIÓN</p><h1>Biblioteca</h1><p>Tus canciones favoritas en un solo lugar.</p></div><LibraryIcon size={40}/></div>{loading ? <div className="empty">Cargando...</div> : error ? <div className="empty">{error}<Link to="/login" className="button primary">Iniciar sesión</Link></div> : songs.length === 0 ? <div className="empty">Tu biblioteca está vacía. <Link to="/descargas">Explorar canciones</Link></div> : <div className="library-list">{songs.map(s => <div className="library-row" key={s.id}><div><strong>{s.title}</strong><span>{s.artist}</span></div><div className="row-actions"><a href={asset(s.link)} download><Download size={17}/></a><button onClick={() => remove(s.id)}>Eliminar</button></div></div>)}</div>}</section>;
}

function Profile() {
  const [data, setData] = useState(null); useEffect(() => { fetch(`${API}/api/session.php`, {credentials:'include'}).then(r=>r.json()).then(setData); }, []);
  return <section className="profile page"><div className="profile-card"><div className="profile-avatar"><User size={48}/></div><p className="eyebrow">CUENTA</p><h1>{data?.user || 'Usuario'}</h1><p>{data?.email || ''}</p><Link to="/biblioteca" className="button primary"><Heart size={17}/> Mi biblioteca</Link></div></section>;
}

function About() { return <section className="page about"><div className="page-title"><div><p className="eyebrow">MUSICFAN</p><h1>Acerca de nosotros</h1><p>Una plataforma académica creada para escuchar, explorar y descargar música.</p></div><Info size={40}/></div><div className="about-grid"><article><h2>El proyecto</h2><p>MusicFan nació como un proyecto colaborativo y continúa evolucionando con nuevas funciones, mejoras de interfaz y una arquitectura más moderna.</p></article><article><h2>Equipo</h2><ul><li><strong>Angel Tonautiuh Tah Och</strong><span>Programador principal</span></li><li><strong>Alex Torres Ramos</strong><span>Programador principal</span></li><li><strong>Walter Emiliano Platón Rodriguez</strong><span>Encargado de CSS</span></li><li><strong>Jania Cristal Manzanilla Fernandez</strong><span>Probadora</span></li></ul></article></div></section>; }

function App() { return <Layout><Routes><Route path="/" element={<Home/>}/><Route path="/login" element={<Login/>}/><Route path="/registro" element={<Register/>}/><Route path="/descargas" element={<Downloads/>}/><Route path="/biblioteca" element={<Library/>}/><Route path="/perfil" element={<Profile/>}/><Route path="/acerca" element={<About/>}/><Route path="*" element={<Home/>}/></Routes></Layout>; }

export default App;
