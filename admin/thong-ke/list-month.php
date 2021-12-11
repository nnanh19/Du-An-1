<div class="card-body">
    <form action="index.php" method="post">
        <table class="table table-bordered table-hover"> 
            <thead class="alert-info">
                <?php
                foreach ($list_statistics_month as $key) {
                    extract($key);
                ?>
                        <?=$tong_tien?>
                <?php
                }
                ?>
            </thead>
        </table>
    </form>
</div>