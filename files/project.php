<div class="project">
    <section>
        <div class="_nav">
            <a href="./?ref=project&section=project_x">Project X</a>
            <a href="./?ref=project&section=psj">PSJ Beta</a>
        </div>
    </section>
    <?php
    $section = '';
    ?>
    <section>
        <div>
        </div>
    </section>
    <section class="right">
        <div style="display: flex; flex-direction: column;">
            <p style="font-size: 20px;">User Data</p>
            <pre><?php print_r($_SESSION['user']); ?></pre>
        </div>
    </section>
</div>