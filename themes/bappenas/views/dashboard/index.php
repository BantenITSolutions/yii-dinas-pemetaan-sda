	<div class="title"><h5>CMS Front</h5></div>

    <div class="widget first">
        <div class="head"><h5 class="iCreate">Welcome, <?php echo Yii::app()->user->nama_lengkap; ?></h5></div>
            <div class="body">
                <p>Your privillage as, <b><?php echo Yii::app()->user->status_user; ?></b></p>
                <p>Your username, <b><?php echo Yii::app()->user->name; ?></b></p>
                <p>Your email, <b><?php echo Yii::app()->user->email; ?></b></p>
            </div>
        </div>
    </div>