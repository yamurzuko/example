<?php   $this->view("header",$data); ?>

      <!-- MAIN -->
      <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Hoşgeldiniz</h1>
              <p class="margin-bottom-0 text-size-16 text-dark">Giriş yaptıktan sonra fotoğraflarınızı yükleyebilirsiniz.</p>
            </div>
          </header>

          <?php if(is_array($data['posts'])): ?>

          <?php foreach($data['posts'] as $row): ?>

            <div class="background-white full-width">
              <div class="s-12 m-6 l-five">
                <a class="image-with-hover-overlay image-hover-zoom" href="<?=ROOT.'single_post/' .$row->url_address; ?>/" title="Portfolio Image">
                  <div class="image-hover-overlay background-primary">
                    <div class="image-hover-overlay-content text-center padding-2x">
                      <h3 class="text-white text-size-20 margin-bottom-10"><?=$row->title?></h3>
                      <p class="text-white text-size-14 margin-bottom-20"><?=$row->description?></p>
                    </div>
                  </div>
                  <img class="full-img" src="<?=ROOT. $row->image?>" alt=""/>
                </a>
              </div>

          <?php endforeach; ?>
          <?php endif; ?>

          </div>
        </article>
      </main>

<?php   $this->view("footer",$data); ?>
