<?php $this->layout('templates/Master', ['title' => 'Login Page']) ?>


<link href="../css/sign-in.css" rel="stylesheet"/>
<div class="d-flex align-items-center py-4">
<style>
      /* as config do vidro do meio*/
      .glass-bg {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 420px;
        background: rgba(255, 255, 255, 0.884);
        border-radius: 24px;
        backdrop-filter: blur(16px) saturate(150%);
        -webkit-backdrop-filter: blur(16px) saturate(150%);
        z-index: 1;
      }

      /* os b.o do fluido*/
      #fluid-wrap { position: fixed; inset: 0; width:100%; height:100%; pointer-events:none; z-index:0; overflow:hidden; }
      main.form-signin { position: relative; z-index: 1; }
  .fluid-blob { fill: rgba(0, 230, 118, 0.65); }
  
  </style>
<style>
      /* as config do vidro do meio*/
      .glass-bg {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 420px;
        background: rgba(255, 255, 255, 0.884);
        border-radius: 24px;
        backdrop-filter: blur(16px) saturate(150%);
        -webkit-backdrop-filter: blur(16px) saturate(150%);
        z-index: 1;
      }

      /* os b.o do fluido*/
      #fluid-wrap { position: fixed; inset: 0; width:100%; height:100%; pointer-events:none; z-index:0; overflow:hidden; }
      main.form-signin { position: relative; z-index: 1; }
  .fluid-blob { fill: rgba(0, 230, 118, 0.65); }

  </style>
    <div id="fluid-wrap">
      <svg id="fluid-svg" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="40" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 24 -12" result="goo" />
          </filter>
        </defs>
        <g id="blobs" filter="url(#goo)"></g>
      </svg>
    </div>
    <main class="form-signin w-100 m-auto">
    <div class="glass-bg"></div>
    <main class="form-signin w-100 m-auto">
      <!-- imagem logo (ver dps) -->
        <!-- <img
          class="mb-4"
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLfFOishIBiVwXvz4w1bmMdqyrW3fOFeSu-Q&s"
          alt=""
          width="72"
          height="57"
        /> -->     
<form action="/login" method="post">
        <h1 class="h3 mb-3 fw-normal" style="color: #000000e7;">Login</h1>
        <div class="form-floating" >
          <input
            type="email"    
            class="form-control"
            id="email" aria-describedby="email" 
            name="email"
            placeholder="name@example.com"
          />
          <label for="email">Email</label>
        </div>
        <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="password" 
            name='password'
            placeholder="Password"
          />
          <label for="password">Senha</label>
        </div>

        <!-- check box de lembrar de login (ver dps) -->
        <!-- <div class="form-check text-start my-3">
          <input
            class="form-check-input"
            type="checkbox"
            value="remember-me"
            id="checkDefault"
          />
          <label class="form-check-label" for="checkDefault">
            Remember me
          </label>
        </div> -->

        <button class="btn btn-primary w-100 py-2" type="submit">
          Entrar
        </button> 
  </form>
  
  <span style="color: #000000e7;;">Não possui uma conta?</span>
  <span><a href="/register" style="color: #000000e7;; text-decoration: underline;" class="link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Registrar-se</a></span>
  <p class="mt-5 mb-3 text-body-secondary" style="color: #11111179 !important;">&copy; Blogif-2025</p>
      </form>
    </main>






    <!-- SCRIPTS ABAIXO :/ -->
    <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
    <script>
      // Fluid background blobs animation
      (function(){
        const blobsGroup = document.getElementById('blobs');
        const num = 24;
        const blobs = [];
        const W = 1600, H = 900;

        // create blobs with autonomous motion params
        for(let i=0;i<num;i++){
          const c = document.createElementNS('http://www.w3.org/2000/svg','circle');
          const r = 80 + Math.random()*120;
          const x = Math.random()*W;
          const y = Math.random()*H;
          c.setAttribute('r', r);
          c.setAttribute('cx', x);
          c.setAttribute('cy', y);
          c.classList.add('fluid-blob');
          blobsGroup.appendChild(c);
          blobs.push({ el: c, x, y, r, angle: Math.random()*Math.PI*2, speed: 0.2 + Math.random()*0.8, amp: 16 + Math.random()*60, idx: i });
        }

        function animate(t){
          const time = t * 0.001;
          for(const b of blobs){
            // gentle circular/oscillating motion
            b.angle += 0.002 * b.speed;
            b.x += Math.cos(b.angle) * (b.amp * 0.02);
            b.y += Math.sin(b.angle) * (b.amp * 0.02);

            // drifting using time-based sine for organic movement
            b.x += Math.sin(time + b.idx) * 0.3;
            b.y += Math.cos(time*0.9 + b.idx) * 0.3;

            // wrap around edges to keep blobs in view
            if(b.x < -300) b.x = W + 300;
            if(b.x > W + 300) b.x = -300;
            if(b.y < -300) b.y = H + 300;
            if(b.y > H + 300) b.y = -300;

            b.el.setAttribute('cx', b.x);
            b.el.setAttribute('cy', b.y);

            // pulsation of radius
            const rr = b.r + Math.sin(time*1.5 + b.idx) * 18;
            b.el.setAttribute('r', Math.max(32, rr));
          }
          requestAnimationFrame(animate);
        }

        requestAnimationFrame(animate);
      })();

       // Cursor ball (aumenta ao passar sobre campos clicáveis)
       const ball = document.createElement('div');
       ball.id = 'cursor-ball';
       document.body.appendChild(ball);
       document.addEventListener('mousemove', (e) => {
         ball.style.left = e.clientX + 'px';
         ball.style.top = e.clientY + 'px';
       });
       // Efeito hover em links, botões e campos de texto
       const interactiveElements = document.querySelectorAll('a, button, input[type="text"], input[type="email"], input[type="password"]');
       interactiveElements.forEach(element => {
         element.addEventListener('mouseenter', () => {
           ball.classList.add('hover');
         });
         element.addEventListener('mouseleave', () => {
           ball.classList.remove('hover');
         });
       });
    </script>
</div>





<?php $this->start('navbar') ?>

<?php $this->stop() ?>