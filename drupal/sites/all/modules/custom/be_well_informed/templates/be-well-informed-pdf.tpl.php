<html>
 <meta charset="UTF-8" />
<head>
    <?php $doc_root = $_SERVER["DOCUMENT_ROOT"]; ?>
    <link rel="stylesheet" type="text/css" href="<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/css/be_well_informed_pdf.css">
    <style type="text/css">
         .step-icon.home-icon:before{
            background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/smallhome2.png);
            width:5em;height:5em;margin-left:4.5em;margin-top:-0.5em;
         }
         .step-icon.facet-icon:before{
            background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/facet.png);
            width:5em;height:5em;margin-left:4.5em;margin-top:-0.5em;
         }

          .bwi-meets-limit:before{background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/check.png);
             background-size: 2em;
             display: inline-block;
             width: 2em;
             height: 2em;
             content: "";
             vertical-align: middle;
             margin-right: 0.5em;
             background-repeat:no-repeat;
          }
          .bwi-close-to-limit:before{background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/exclamation.png);
             background-size: 2em;
             display: inline-block;
             width: 2em;
             height: 2em;
             content: "";
             vertical-align: middle;
             margin-right: 0.5em;
             background-repeat:no-repeat;
          }
          .bwi-above-limit:before{background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/false.png);
             background-size: 2em;
             display: inline-block;
             width: 2em;
             height: 2em;
             content: "";
             vertical-align: middle;
             margin-right: 0.5em;
             background-repeat:no-repeat;
          }
         .bwi-above-limit:before{background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/false.png);
           background-size: 2em;
           display: inline-block;
           width: 2em;
           height: 2em;
           content: "";
           vertical-align: middle;
           margin-right: 0.5em;
           background-repeat:no-repeat;
         }
         .bwi-consult:before{background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/orange.png);
           background-size: 2em;
           display: inline-block;
           width: 2em;
           height: 2em;
           content: "";
           vertical-align: middle;
           margin-right: 0.5em;
           background-repeat:no-repeat;
         }
         .bwi-no-entry:before{background-image: url(<?php print $doc_root; ?>/sites/all/modules/custom/be_well_informed/images/circle.png);
           background-size: 2em;
           display: inline-block;
           width: 2em;
           height: 2em;
           content: "";
           vertical-align: middle;
           margin-right: 0.5em;
           background-repeat:no-repeat;
         }

    </style>
</head>
 <body>
 <div id="be-well-informed-results-wrapper-pdf"
      class="be-well-informed-modal-wrapper">
   <h1 class="be-well-pdf-title">Be Well Informed Water Analysis Tool</h1>
   <div id="be-well-informed-accordion" class="ui-accordion">
     <h3>Your Water Analysis Results</h3>
     <div>
       <span class="bwi-result-title">About the Results</span>
       <p>
         The Results below compare your water to federal and state health-based
         standards (Maximum Contaminant Levels -
         MCLs)
         and other guidelines (Secondary Maximum Contaminant Levels - SMCLs,
         health advisory levels, etc.). These
         standards
         and guidelines are often referred to as "limits" on your laboratory
         report. If your water exceeds or is
         approaching
         established federal/state drinking water limits or advisory levels for
         the contaminant(s) entered, additional
         health
         information and treatment options will be shown.
       </p>
       <p>
         Several contaminants, such as radon and sodium, do not have state
         or federal standards. Instead, when radon is present in drinking water
         at 2,000 pCi/L or greater, we recommend
         you
         check the
         <a
             href="http://des.nh.gov/organization/commissioner/pip/factsheets/dwgb/documents/dwgb-3-12.pdf" target="_blank">
           Drinking Water Fact Sheet
         </a>.
         For sodium, health and treatment information is shown when sodium is
         present at
         levels above 20 mg/L, U.S. EPA's federal "health advisory" for persons
         on a physician-prescribed "no salt
         diet."
       </p>
     </div>
     <span class="bwi-result-title">Results Summary</span>
     <div>
       <h3 class="bwi-key">Key</h3>
       <div class="bwi-legend clearfix">
         <div class="bwi-meets-limit one-half">Meets the Drinking Water Limit</div>
         <div class="bwi-close-to-limit one-half">Close to the Drinking Water Limit</div>
         <div class="bwi-above-limit one-half">Above the Drinking Water Limit</div>
         <div class="bwi-consult one-half">Consult NHDES <a href="http://des.nh.gov/organization/commissioner/pip/factsheets/dwgb/documents/dwgb-3-12.pdf" target="_blank">
             Fact Sheet WD-DWGB-3-12</a>
         </div>
         <div class="bwi-no-entry one-half">No Input Entered</div>
       </div>
     </div>
     <table cellspacing=0 cellpadding=0 class="summary-table-pdf"> <tr> <th class='icon-column'>Result</th> <th>Element</th> <th>Your Entry</th> <th>Limit</th> <th>About Your Well Water</th> </tr>

       <tbody>
       <?php foreach ($response_json_data_pdf['result_summary'] as $res_summary): ?>
         <tr>
           <td class='icon-column'><?php print str_replace('sites', $doc_root.'/sites', $res_summary[0]); ?></td>
           <td class='element-col'><?php print $res_summary[1]; ?></td>
           <td><?php print $res_summary[2]; ?></td>
           <td class='limit-col'><?php print $res_summary[3]; ?></td>
           <td><?php print $res_summary[4]; ?></td>
         </tr>
       <?php endforeach; ?>

       </tbody>


     </table>

     <?php if(!empty($contaminants_title)): ?>
     <br><br>
     <span class="bwi-result-title">Water Treatment Systems That Remove <?php print $contaminants_title ?></span>:
     <div class="datatable usa-width-one-whole hide treatment-content">
       <div class='water-treatment-head'>
         The following water treatment is based on the water quality
         information you entered. <span class='detail-show'>Details concerning water treatment are below.</span>
       </div>
       <?php
       variable_set('varz_treatment_steps',$response_json_data_pdf['TreatmentSteps']);
       $toShow = array();   //added forpdf
       foreach($response_json_data_pdf['TreatmentSteps'] as $key=>$value){
         array_push($toShow, $key);
       }
       ?>
       <h3 class="treatment_order_title">Treatment Order</h3>
       <div class="step-class">
         <?php
         $count = 0;  //added forpdf
         $stepLabel = 1;   //added forpdf
         variable_set('varz_treatments',$treatments);
         foreach ($treatments as $t):
           if(in_array($count, $toShow)):   //added forpdf ?>
             <div class="clearfix treatment-step">
               <div class="caret"></div>
               <div class="step">
                 <span <?php if ($t['icon']): print "class='treatment-icon ". $t['icon']."-icon step-icon'"; endif; ?>><?php print " Step ".$stepLabel; //added forpdf ?></span>
               </div>
               <div class="float-center">
                 <center>
                   <div class="step-boxes text-center clearfix">
                     <?php if ($t['text']): echo "<div class='additional-text'>{$t['text']}</div>"; endif; ?>
                     <?php //foreach ($t['boxes'] as $ix => $bx): ?>
                     <?php
                     $or_count = 1;
                     $total_items = count($response_json_data_pdf['TreatmentSteps']->$count->OrInstructions);
                     foreach($response_json_data_pdf['TreatmentSteps']->$count->OrInstructions as $ix => $bx): ?>
                       <div
                           class="box-main <?php //if ($bx['icon']): echo "treatment-icon ".$bx['icon']."-icon instruction-icon"; endif; ?>"
                           title="<?php echo $bx->Recommendation; ?>"><?php echo $bx->Recommendation; ?></div>
                       <?php if ($total_items != $or_count): echo "<div class='or'>Or</div>"; $or_count++; endif; ?>
                     <?php endforeach; ?>
                   </div>
                 </center>
               </div>
             </div>
             <?php
             $stepLabel++;
           endif;
           $count++;
           //added forpdf
           ?>
         <?php endforeach; ?>
       </div>
       <p class="step-class system-type-house hide">
          <span>Regardless of water treatment technology, it is essential that system maintenance be
                            performed on schedule to maintain system effectiveness.
                            </span><br>
         <br><span>
                            </span><br>
          <span><b>What does “whole house” mean?</b> The term whole house indicates that the treatment
                            technology is installed at the point where water enters your home to treat all of
                            the water used in your home.
                            </span>
       </p>
       <p class="step-class system-type-water hide">
         <b>What does “Point of Use” (POU) mean?</b> Point of Use technologies
         are installed
         and treat water at one specific location in your Home where water is
         used, like
         your kitchen faucet.
       </p>
       <p>
          <span>Print this report and make final water treatment decisions with a qualified <a
                target="_blank"
                href="http://www.wqa.org/Programs-Services/Resources/Find-Providers/Find-Certified-Professionals">water treatment professional.</a></span>
         <br>
         <br>
          <span>More Information about selecting appropriate water treatment devices is available
                                from <a target="_blank"
                                        href="http://www.nsf.org/consumer-resources/what-is-nsf-certification/water-filters-treatment-certification/selecting-a-water-treatment-system/">
              NSF</a> and <a target="_blank"
                             href="http://www.extension.org/pages/31581/home-water-treatment-devices#.VIdCJcgo7cs">
              Cooperative Extension</a>.
                                <br>
                            </span>
       </p>
       <p><span>More Information is available from <a target="_blank" href="http://des.nh.gov/organization/commissioner/pip/factsheets/dwgb/index.htm">NHDES</a> and <a target="_blank" href="http://water.epa.gov/drink/contaminants/index.cfm">US EPA</a></span></p>
       <?php endif;    //added forpdf ?>
     </div>
     <span class="bwi-result-title">Results Details</span>
     <div
         class="datatable usa-width-one-whole be-well-informed-result-details">
       <h3 class="bwi-key">Key</h3>
       <div class="bwi-legend clearfix">
         <div class="bwi-meets-limit one-half">Meets the Drinking Water
           Limit
         </div>
         <div class="bwi-close-to-limit one-half">Close to the Drinking Water
           Limit
         </div>
         <div class="bwi-above-limit one-half">Above the Drinking Water
           Limit
         </div>
         <div class="bwi-consult one-half">Consult NHDES <a
               href="http://des.nh.gov/organization/commissioner/pip/factsheets/dwgb/documents/dwgb-3-12.pdf" target="_blank">
             Fact Sheet WD-DWGB-3-12
           </a></div>
         <div class="bwi-no-entry one-half">No Input Entered</div>
       </div>
       <table cellspacing=0 cellpadding=0 class="summary-table-pdf"> <tr> <th class='icon-column'>Result</th> <th>Element</th> <th>Your Entry</th> <th>Limit</th> <th>About Your Well Water</th> </tr>
         <tbody>
         <?php
         $i = 0;
         $titles = ['Interpretation of Results:', 'Health Concerns:', 'Treatment Options:'];
         $detail_objs = $response_json_data_pdf['result_details'];
         foreach ($response_json_data_pdf['result_summary'] as $res_summary): ?>
         <tr>
           <td class='icon-column'><?php print str_replace('sites', $doc_root.'/sites', $res_summary[0]); ?></td>
           <td class='element-col'><?php print $res_summary[1]; ?></td>
           <td><?php print $res_summary[2]; ?></td>
           <td class='limit-col'><?php print $res_summary[3]; ?></td>
           <td><?php print $res_summary[4]; ?></td>
         </tr>
           <?php
           $result = $detail_objs[$i]['result'];
           if(count($detail_objs[$i]['data_array']) > 0){
             for($j = 0; $j < count($detail_objs[$i]['data_array']); $j++){
               $res_det_title = "";
               if(!empty($detail_objs[$i]['data_array'][$j])){
                 $res_det_title = $titles[$j];
                 print "<tr><td class='bwi-detail-td " . $result . "' colspan='5'><h4>" . $res_det_title . "</h4>" . $detail_objs[$i]['data_array'][$j] . "</td></tr>";
               }
             }
           }
           $i++;
         endforeach; ?>

         </tbody>

       </table>
     </div>
   </div>
 </div>
 </body>
</html>