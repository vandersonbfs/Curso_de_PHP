<?php
  // Inclui o arquivo de cabeçalho, que normalmente contém o início do HTML, o <head> e o menu
  include_once("templates/header.php");
?>
<main>
  <!-- Container do título principal do blog -->
  <div id="title-container">
    <h1>Blog Codar</h1>
    <p>O seu blog de programação</p>
  </div>

  <!-- Container onde os posts do blog serão listados -->
  <div id="posts-container">
    <?php foreach($posts as $post): ?> <!-- Loop para percorrer todos os posts armazenados no array $posts -->
      <div class="post-box"> <!-- Caixa individual de um post -->

        <!-- Imagem do post. A imagem é carregada a partir do diretório /img e definida dinamicamente -->
        <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">

        <h2 class="post-title">
          <!-- Título do post como link. Leva o usuário para a página do post com base no ID -->
          <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
        </h2>

        <!-- Descrição do post exibida logo abaixo do título -->
        <p class="post-description"><?= $post['description'] ?></p>

        <!-- Container para as tags associadas ao post -->
        <div class="tags-container">
          <?php foreach($post['tags'] as $tag): ?> <!-- Loop pelas tags do post -->
            <a href="#"><?= $tag ?></a> <!-- Cada tag é exibida como um link (ainda sem funcionalidade) -->
          <?php endforeach; ?>
        </div>

      </div> <!-- Fim da caixa do post -->
    <?php endforeach; ?> <!-- Fim do loop de posts -->
  </div> <!-- Fim do container de posts -->
</main>

<?php
  // Inclui o arquivo de rodapé, que geralmente encerra o HTML com scripts e o fechamento das tags
  include_once("templates/footer.php")
?>
