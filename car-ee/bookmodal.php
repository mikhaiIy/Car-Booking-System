<?php


?><!-- The modal -->
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelLarge">Modal Title</h4>
            </div>

            <div class="modal-body">
                <form method="post" action="customerbookingprocess.php">
                    <input type="text" name="vreg" id="v-regI" style="display: none">
                    <div class="form-group"><h3> Vehicle Reg: <span id="v-reg2"></span></h3><h3> Name: <span id="v-type2"></span></h3> <h3> Price: RM<span id="v-price1"></span>/Day</h3> </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="form-label">Start Date</span><div class="form-group"> <input class="form-control" name="fpdate" type="date" required>  </div>
                        </div>
                        <div class="col-md-6">
                            <span class="form-label">End Date</span><div class="form-group"> <input class="form-control" name="frdate" type="date" required>  </div>
                        </div>
                    </div>
                    <?php
                    ?>
                    <div class="form-btn"> <button class="submit-btn">Book Now</button> </div>
                </form>
            </div>

        </div>
    </div>
</div>