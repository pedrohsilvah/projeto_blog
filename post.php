<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            } 

        }
    }
?>

    <main id="post-container">
        <div class="content-container">

            <h1 id="main-title"><?= $currentPost['title'] ?></h1>

            <p id="post-description"><?= $currentPost['description'] ?></p>

            <div class="img-container">
                <img src="/projeto_blog/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab molestiae molestias ut reprehenderit praesentium! Quidem magnam fugit quia mollitia eveniet nulla minus unde praesentium, nostrum et possimus in maiores?
            Repellat inventore quae ad dicta enim ipsam reprehenderit voluptatem fuga perferendis facere dolore rerum magnam sint sit cupiditate alias, ullam molestiae minus nam eius quam ex, labore recusandae deleniti? Nesciunt.
            Est voluptates magnam atque tenetur iste deleniti deserunt dolorum nesciunt ullam reprehenderit possimus tempora, incidunt reiciendis quasi magni porro dolore iure minus officiis illo repellendus adipisci! Neque esse similique maiores.
            Distinctio numquam, aliquid quos asperiores neque molestias quo? Ullam, optio? Aliquam cupiditate tempore neque, quae deleniti, placeat ab ipsa rerum quaerat, voluptatem et. At aut fugit nesciunt nihil ipsam consectetur.
            Laboriosam aut ipsam hic nostrum, cum repudiandae cupiditate consectetur! Harum ea minima optio quos. Adipisci fugiat commodi similique quas exercitationem quo voluptate blanditiis! Sequi accusantium unde, nihil vel perferendis ullam.</p>

            <p class="post-content"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ab molestiae molestias ut reprehenderit praesentium! Quidem magnam fugit quia mollitia eveniet nulla minus unde praesentium, nostrum et possimus in maiores?
            Repellat inventore quae ad dicta enim ipsam reprehenderit voluptatem fuga perferendis facere dolore rerum magnam sint sit cupiditate alias, ullam molestiae minus nam eius quam ex, labore recusandae deleniti? Nesciunt.
            Est voluptates magnam atque tenetur iste deleniti deserunt dolorum nesciunt ullam reprehenderit possimus tempora, incidunt reiciendis quasi magni porro dolore iure minus officiis illo repellendus adipisci! Neque esse similique maiores.
            Distinctio numquam, aliquid quos asperiores neque molestias quo? Ullam, optio? Aliquam cupiditate tempore neque, quae deleniti, placeat ab ipsa rerum quaerat, voluptatem et. At aut fugit nesciunt nihil ipsam consectetur.
            Laboriosam aut ipsam hic nostrum, cum repudiandae cupiditate consectetur! Harum ea minima optio quos. Adipisci fugiat commodi similique quas exercitationem quo voluptate blanditiis! Sequi accusantium unde, nihil vel perferendis ullam.</p>
        </div>
    </main>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>

        <div id="tag-list">
            <?php foreach ($post['tags'] as $tag) : ?>
                <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
        </div>
    </aside>
<?php
    include_once("templates/footer.php")
?>