<!--container start-->
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <img width="470" src="<?php echo base_url(IMAGES."elseweb-gui.png");?>" alt="text img">
        </div>
        <div class="col-lg-7 about">
            <h3>Option 1: Experiment Graphical User Interface</h3>
            <p>The primary entry point into the ELSEWeb system is through the ELSEWeb graphical user interface. Through the interface, users can specify an experiment specification in terms of: the modeling scenario data, modeling algorithm, and the species occurrence data they want to project.</p>
            <p><a href="<?php echo LODSPEAKR."instances/elseweb_edac:PublishedPRISMDataset";?>">Data comprising the modeling scenario</a> can be selected in terms of spatial/temporal coverage, environmental entity (e.g., air, land, water) and environmental characteristic (e.g., temperature, dew point).</p>
            <p>The <a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:LifemapperAlgorithm";?>">algorithm</a> selection comprises of the algorithm name and associated parameter set. The system will populate the interface with default parameters values, however users have the option of specifying their own values as long as they fall within the input data domain.</p>
            <p>Finally, users select they <a href="<?php echo LODSPEAKR."instances/elseweb_lifemapper:SpeciesOccurrenceDataset";?>">species data</a> they want to project by simply specifying the species name or selecting from a drop down list of names. In this case, users will be generating species projections using data housed at Lifemapper. Our future work includes allowing users to upload their own occurrence data points.</p>
        </div>
    </div>

    <div class="row">
        <div class="hiring">
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Option 2: Experiment Endpoint Service</h3>
                    <p>The Experiment Interface, presented above, captures users selection in the form of an <a href="http://ontology.cybershare.utep.edu/ELSEWeb/linked-data/lifemapper/experiments/specifications/json/sample-specification.json">ELSEWeb experiment specification</a>. These specifications are posted to an underlying <a href=”http://visko.cybershare.utep.edu/elseweb-endpoint/”>HTTP POST service</a>. Power users can generate their own JSON specifications and submit them to the service through the input text box or submit specifications programmatically. Click on the image below to navigate to the submission service, where you will find sample inputs (such as the adjacent specification) and outputs. Additionally, the service page describes how to interface with the service programatically.</p>
                    <a href="<?php echo ENDPOINT;?>"><img width="500" src="<?php echo base_url(IMAGES."elseweb-endpoint.png");?>" alt="text img"></a>                       
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <pre><span class="inner-pre" style="font-size: 9px">{"specification": {
    "id": "d046d1fa-98cc-4705-b44d-884c263bbcfa",
    "occurrenceDataID": "1032789",
    "algorithm": {
        "id": "ANN",
        "parameterBindings": [
            {"name": "Choice", "value": "1", "datatype": "integer"},
            {"name": "Epoch", "value": "5000000", "datatype": "integer"},
            {"name": "HiddenLayerNeurons", "value": "14", "datatype": "integer"},
            {"name": "LearningRate", "value": "0.3", "datatype": "double"},
            {"name": "MinimumError", "value": "0.01", "datatype": "double"},
            {"name": "Momentum", "value": "0.05", "datatype": "double"}
            ]
        },
        "modelingScenario": [
            {"datasetURI": "http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348880"},
            {"datasetURI": "http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348881"},
            {"datasetURI": "http://visko.cybershare.utep.edu/linked-data/edac/services/dataset_348884"}
            ]
    }
}</span></pre>
                </div>
            </div>
        </div>
    </div>

   <div class="row">
        <div class="hiring">
                        <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <pre><span class="inner-pre" style="font-size: 9px">{"executedSpecification": {
    "successful": "true",
    "experimentResult": {
        "resultURI": "http://visko.cybershare.utep.edu/linked-data/elseweb/sadi/experimentResult-ef92ec6c-fffe-444d-b052-ff99ac5fe358",
        "resultURL": "http://lifemapper.org/services/sdm/experiments/999951"
        }
    }
}</span></pre>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="content">
                    <h3 class="title">Experiment Results:</h3>
                    <p>
                    If ELSEWeb was able to execute your experiment successfully, you will be provided with both a link to the Lifemapper experiment result page as well as a link to the provenance trace associated with the experiment run. When using the Experiment Graphical User Interface, the result and provenance will be available as a link.
                    <br>
                    If you are using the experiment submission service directly, then you will be provided with a JSON response, which indicates: whether the experiment was successfully executed, the link to the Lifemapper result page, and a link to the provenance trace. Examples of these JSON responses are shown along side this text.
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
<!--container end-->
