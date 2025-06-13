<div class="card animate fadeIn" data-card="team">
    <div class="card-image">
        <img src="<?php echo $member["image"]; ?>" alt="<?php echo $member["name"]; ?>">
    </div>

    <div class="card-content">
        <div class="card-name">
            <h3>
                <?php echo $member["name"]; ?>
            </h3>
        </div>
        <div class="card-position">
            <p>
                <?php echo $member["position"]; ?>
            </p>
        </div>
    </div>
</div>