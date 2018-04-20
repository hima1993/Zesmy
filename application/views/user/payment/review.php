<?php
/**
 * Created by PhpStorm.
 * User: Isuru Jayasinghe
 * Date: 4/15/2018
 * Time: 4:51 PM
 */?>

<!-- Modernizr -->

<section>
<!--    <h2>9 - Dot Indicators with Steps Counter</h2>-->

    <nav>
        <ol class="cd-multi-steps text-bottom count">
            <li class="current"><a href="#0">Review</a></li>
            <li><em>Payment</em></li>
            <li><em>Done</em></li>
<!--            <li class="visited"><em>Review</em></li>-->
        </ol>
    </nav>

    <div>
        <?php echo form_open('MakePayment/shipDetails'); ?>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Contact Name</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Country/Region</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputPassword3" placeholder="Country/Region">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Street Address</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Street">
                </div>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Apartment, suite, unit etc (Optional)">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">State/Province/Region</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="State/Province/Region">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="City">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Zip/Postal Code</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Zip/Postal Code">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Zip/Postal Code">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save and ship to this address</button>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>

</section>


