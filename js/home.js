const canvas = document.getElementById('connector-canvas');
const ctx = canvas.getContext('2d');

const gridSize = 40;
let pulses = [];

function initCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    pulses = [];
}

function createPulse() {
    if (pulses.length > 50) return;
    const cols = Math.floor(canvas.width / gridSize);
    const rows = Math.floor(canvas.height / gridSize);
    const startX = Math.floor(Math.random() * (cols + 1)) * gridSize;
    const startY = Math.floor(Math.random() * (rows + 1)) * gridSize;
    const direction = Math.random() > 0.5 ? 'h' : 'v';
    const length = (Math.floor(Math.random() * 5) + 3) * gridSize;
    pulses.push({ startX, startY, progress: 0, speed: 0.008 + Math.random() * 0.015, direction, length });
}

function drawFuturisticGrid() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    pulses.forEach((p, index) => {
        p.progress += p.speed;
        if (p.progress > 1.3) { pulses.splice(index, 1); return; }
        const alpha = Math.sin(Math.min(p.progress * Math.PI, Math.PI)) * 0.2;
        ctx.strokeStyle = `rgba(255, 255, 255, ${alpha})`;
        ctx.lineWidth = 1.5;
        ctx.beginPath();
        const tailLength = gridSize * 2.5;
        if (p.direction === 'h') {
            ctx.moveTo(p.startX + (p.progress * p.length) - tailLength, p.startY);
            ctx.lineTo(p.startX + (p.progress * p.length), p.startY);
        } else {
            ctx.moveTo(p.startX, p.startY + (p.progress * p.length) - tailLength);
            ctx.lineTo(p.startX, p.startY + (p.progress * p.length));
        }
        ctx.stroke();
    });
    if (Math.random() > 0.85) createPulse();
}

const cycleTime = 10000;
const activeTime = 6600;

function updateScanner() {
    const now = Date.now();
    const elapsed = now % cycleTime;
    
    let currentX = -2000;
    const currentY = window.innerHeight / 2;
    let shadowAlpha = 0;

    if (elapsed < activeTime) {
        const progress = elapsed / activeTime;
        const startX = -window.innerWidth * 0.4;
        const endX = window.innerWidth * 1.4;
        currentX = startX + (endX - startX) * progress;
        
        shadowAlpha = Math.max(0, 1 - Math.abs(progress - 0.5) * 4);
        shadowAlpha = Math.pow(shadowAlpha, 2); 
    }

    document.documentElement.style.setProperty('--x', `${currentX}px`);
    document.documentElement.style.setProperty('--y', `${currentY}px`);
    document.documentElement.style.setProperty('--shadow-alpha', shadowAlpha);
    
    drawFuturisticGrid();
    requestAnimationFrame(updateScanner);
}

window.addEventListener('resize', initCanvas);
initCanvas();
updateScanner();
