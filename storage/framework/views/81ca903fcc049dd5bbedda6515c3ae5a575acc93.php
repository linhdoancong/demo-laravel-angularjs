<?php $__env->startSection('content'); ?>
<div class="container" ng-app="demoApp" ng-controller="demoController">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="checkbox" ng-repeat="item in data.list_items">
                                    <label><input type="checkbox" ng-model="input_item[item.id]" ng-true-value="<%item.id%>" ng-false-value="''"><%item.name%></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 text-center col-md-offset-1" style="margin-bottom:20px">
                        <button type="button" class="btn btn-primary" ng-click="submit()">Submit</button>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12" ng-repeat="item in data.list_user_items">
                                    <div class="col-sm-10"><%item.name%></div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-link btn-xs" ng-click="remove(item.id)">
                                          <span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>