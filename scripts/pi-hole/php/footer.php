<?php
/* Pi-hole: A black hole for Internet advertisements
*  (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*  Network-wide ad blocking via your own hardware.
*
*  This file is copyright under the latest version of the EUPL.
*  Please see LICENSE file for your rights under this license. */ ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- Modal for custom disable time -->
    <div class="modal fade" id="customDisableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Custom disable timeout</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input id="customTimeout" class="form-control" type="number" value="60">
                            <div class="input-group-btn" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input id="selSec" type="radio"> Secs
                                </label>
                                <label id="btnMins" class="btn btn-default active">
                                    <input id="selMin" type="radio"> Mins
                                </label>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="pihole-disable-custom" class="btn btn-primary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div> <!-- /.content-wrapper -->

<?php
    // Flushes the system write buffers of PHP. This attempts to push everything we have so far all the way to the client's browser.
    flush();
    // Run update checker
    //  - determines local branch each time,
    //  - determines local and remote version every 30 minutes
    require "scripts/pi-hole/php/update_checker.php";

    $coreVersionStr = $core_current . (isset($core_commit) ? " (" . $core_branch . ", " . $core_commit . ")" : "");
    $webVersionStr = $web_current . (isset($web_commit) ? " (" . $web_branch . ", " . $web_commit . ")" : "");
    $ftlVersionStr = $FTL_current . (isset($FTL_commit) ? " (" . $FTL_branch . ", " . $FTL_commit . ")" : "");

    $githubBaseUrl = "https://github.com/pi-hole";
    $coreUrl = $githubBaseUrl . "/pi-hole";
    $webUrl = $githubBaseUrl . "/AdminLTE";
    $ftlUrl = $githubBaseUrl . "/FTL";

    $coreReleasesUrl = $coreUrl . "/releases";
    $webReleasesUrl = $webUrl . "/releases";
    $ftlReleasesUrl = $ftlUrl . "/releases";
?>
    <footer class="main-footer">

        <div class="row row-centered text-center version-info">
            <div class="col-xs-12 col-sm-8 col-md-6">
    
                <ul class="list-unstyled">
                    <li><strong>SamAd</strong> copyright SamAd Unikl MIIT 2021</li>
                </ul>
            </div>
        </div>
    </footer>

</div>
<!-- ./wrapper -->
<script src="scripts/pi-hole/js/footer.js?v=<?=$cacheVer?>"></script>
<script>
  feather.replace()
</script>
</body>
</html>
