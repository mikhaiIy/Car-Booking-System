<?php


?><!-- The modal -->
<div class="modal fade" id="largeShoes2" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelLarge">Modal Title</h4>
            </div>

            <div class="modal-body">
                <form method="post" action="customercancelprocess.php">
                    <input type="text" name="bid" id="Cbid" style="display: none">
                    <h3>Vehicle Reg: <span id="Cv-reg2"></span></h3>
                    <h3>Name: <span id="Cv-type"></span></h3>
                    <h3>Price: RM<span id="Cv-price"></span>/Day</h3>
                    <h3>Start Date: <span id="Cpdate"></span></h3><div class="form-group"> </div>
                    <h3>End Date: <span id="Crdate"></span></h3><div class="form-group"> </div>
                    <div class="form-btn"> <button class="btn btn-danger">Confirm Cancel Booking</button> </div>
                </form>
            </div>

        </div>
    </div>
</div>