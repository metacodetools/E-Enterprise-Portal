<div class="usa-grid-full">
  <div id="chemical-rules-loading-wrapper"
       class="chemical-rules-modal-wrapper">
    <h1>Loading search results for <span id="user-chemical-name"></span>&hellip;</h1> <i class="fa fa-spinner" aria-hidden="true"></i>
  </div>
  <div id="chemical-rules-results-wrapper"
       class="chemical-rules-modal-wrapper">
    <ul class="cr-modal-actions">
      <li><a class="cr-save-chemical" href="javascript:void(0)">Save to My Chemicals</a></li>
      <li><a class="cr-future">Save as PDF</a></li>
      <li><a class="cr-future">Share This</a></li>
    </ul>
    <ul class="cr-modal-toc" id="cr-modal-toc-icons">
      <li><a href="#cr-laws-regs">Laws & Regulations</a></li>
      <li><a href="#cr-programs">Programs</a></li>
      <li><a href="#cr-structure">Structure</a></li>
      <li><a href="#cr-properties">Chemical &amp; Physical Properties</a></li>
      <li><a href="#cr-synonyms">Synonyms</a></li>
      <li><a href="#cr-lists">Substance Lists</a></li>
    </ul>
    
    <!-- @LAWS AND REGULATIONS -->
    <h2 id="cr-laws-regs">Laws &amp; Regulations</h3>
    <!-- @TODO List laws and regulations for the Search term -->  
    <h3>3 laws and regulations found for Acetone:</h3>
    <ul class="cr-rules-regs_exact">
      <li><a href="#">40 CFR &sect; 261.31 - Hazardous Waste from non-specific sources.</a></li>  
    </ul>
    
  <!-- @TODO - If CFR returned due to specific synonym is discernible, include the next items -->  
    <!-- @TODO - See previous @TODO - If synonyms will be returned, list laws and regulations for Synonym 1 -->
    <!--
    <h3>Acetone is a synonym for 2-Propanone. <span class="cr-match-type">1 rule and regulation found for 2-Propanone:</span></h3>
    <ul class="cr-rules-regs_synonyms">
      <li><a href="#">40 CFR &sect; 261.31 - Hazardous Waste from non-specific sources.</a></li>  
    </ul>  
    -->
    <!-- @TODO - See previous @TODO - List laws and regulations for Synonym 2 -->
    <!--
    <h3>3 laws and regulations found for Acetone:</h3>
    <ul class="cr-rules-regs_substance_synonyms">
      <li><a href="#">40 CFR &sect; 261.31 - Hazardous Waste from non-specific sources.</a></li>  
    </ul>    
    -->
    
    <!-- @TODO List laws and regulations for Substance List -->
    <div id="cr-laws-regs_substances">
      <!-- h3, ul, li -->
      <h3>Acetone appears on the following Substance Lists: <span class="cr-match-type">Volatile Organic Compounds - 2 laws and regulations apply:</span></h3>
      <ul class="cr-rules-regs_lists">
        <li><a href="#">40 CFR &sect; 261.31 - Hazardous Waste from non-specific sources.</a></li>  
      </ul>
    </div><!-- @end #cr-laws-regs_substances -->
    
    <!-- @PROGRAMS -->
    <div id="cr-laws-regs_programs">
      <h2 id="cr-programs">Programs</h2>
      <div class="cr-programs_container">
        <ul>
          <li><a href="#">US EPA Toxic Substances Control Act Program</a></li>
        </ul>
      </div><!-- @end .cr-programs_container -->
    </div><!-- @end #cr-laws-regs_programs -->

    <!-- @STRUCTURE --> 
    <div id="cr-laws-regs_structure">   
      <h2 id="cr-structure">Structure</h2>
      <div class="cr-structure_container">
        <div class="cr-structure_image">
          <img src="<?php print base_path() . path_to_theme(); ?>/images/imgsrv.png" alt="A structure of acetone">
          <p>Powered by <a href="https://pubchem.ncbi.nlm.nih.gov" rel="external" target="_blank">PubChem</a></p>
        </div>
        <div class="cr-structure_name">
          <p>C3H6O</p>
        </div>
      </div><!-- @end .cr-structure_container -->
    </div><!-- @end #cr-laws-regs_structure -->

    <!-- @CHEMICAL & PHYSICAL PROPERTIES -->    
    <div id="cr-laws-regs_properties">      
      <h2 id="cr-properties">Chemical &amp; Physical Properties</h2>
      <div class="cr-properties_container">
        <table>
          <thead>
            <tr>
              <th scope="col">Property</th>
              <th scope="col">Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Text</th>
              <td>Text</td>
            </tr>
          </tbody> 
        </table>
      </div><!-- @end .cr-properties_container -->    
    </div><!-- @end #cr-laws-regs_properties -->    

    <!-- @SYNONYMS -->    
    <div id="cr-laws-regs_synonyms">
      <h2 id="cr-synonyms">Synonyms</h2>
      <div class="cr-synonyms_container">
        <ul>
          <li>Synonym 1</li>
        </ul>
      </div><!-- @end .cr-synonyms_container -->    
    </div><!-- @end #cr-laws-regs_synonyms -->    
    
    <!-- @SUBSTANCE LISTS -->    
    <div id="cr-laws-regs_lists">    
      <h2 id="cr-lists">Substance Lists</h2>
      <div class="cr-lists_container">
        <ul>
          <li>Substance List 1</li>
        </ul>
      </div><!-- @end .cr-lists_container -->    
    </div><!-- @end #cr-laws-regs_lists -->
    
  </div><!-- @end .chemical-rules-results-wrapper -->
</div><!-- @end usa-grid-full for CR -->
