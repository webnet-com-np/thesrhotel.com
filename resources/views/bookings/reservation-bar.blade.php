
    <!-- reservation-bar -->
    <div class="reservation-bar">
        <div class="container">
            <div class="row">
                <form action="{{ route('bookings') }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-append date" id="dpd1" data-date="Check In" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" name="arrive_date" size="16" type="text" value="" placeholder="Arrive Date" autocomplete="off" required>
                                    <span class="icon-calendar"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-append date" id="dpd2" data-date="Check Out" data-date-format="dd-mm-yyyy">
                                    <input class="form-control" name="departure_date" size="16" type="text" value="" placeholder="Depature Date" autocomplete="off" required>
                                    <span class="icon-calendar"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="fake-select">

                                        <input class="form-control" name="guest_numbers" data-toggle="collapse" type="text" data-target="#guest-modal" placeholder="2 Adults 1 Child"  id="guest-numbers"  autocomplete="off" required  style="background-color:#353535" >
                                        <div class="collapse guest-modal" id="guest-modal">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="Children" class="col-sm-2 col-form-label">Children</label>
                                                    <div class="col-sm-5 guest-modal-select">
                                                        <select name="children" id="child-num" required>
                                                            <option value="0" selected>0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5+">5+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="adult" class="col-sm-2 col-form-label">Adult</label>
                                                    <div class="col-sm-5 guest-modal-select">
                                                        <select name="adult" id="adult-num" required>
                                                            <option value="1" selected>1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5+">5+</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>


                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="fake-select">
                                        <select name="room_type" required>
                                            <option value="suite" selected>Suite Room</option>
                                            <option value="deluxe">Deluxe Room</option>
                                            <option value="standard">Standard Room</option>
                                            <option value="honeymoon">Honeymoon Suite Room</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <input type="submit" class="btn btn-reservation" value="check availability">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
