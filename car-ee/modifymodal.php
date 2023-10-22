<?php


?><!-- The modal -->
<div class="modal fade" id="largeShoes1" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelLarge">Modal Title</h4>
            </div>

            <div class="modal-body">
                <form method="post" action="customermodifyprocess.php">
                    <input type="text" name="bid" id="bid" style="display: none">
                    <input type="text" name="vreg" id="v-regI" style="display: none">
                    <h3> Vehicle Reg: <span id="v-reg2"></span></h3><div class="form-group"><h3> Name: <span id="v-type"></span></h3><h3> Price: RM<span id="v-price"></span>/Day</h3>  </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span class="form-label">Start Date: <span id="pdate"></span></span><div class="form-group"> <input class="form-control" name="fpdate" type="date"  required>  </div>
                        </div>
                        <div class="col-md-6">
                            <span class="form-label">End Date: <span id="rdate"></span></span><div class="form-group"> <input class="form-control" name="frdate" type="date" required>  </div>
                        </div>
                    </div>
                    <?php
                    ?>
                    <div class="form-btn"> <button class="submit-btn">Submit Changes</button> </div>
                </form>
            </div>

        </div>
    </div>
</div>