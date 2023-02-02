<p>To delete a file in a project, call the <code>DeleteProjectFile</code> method with the project Id and file name.</p>
<div class="section-example-container">
    <pre class="csharp">var response = api.DeleteProjectFile(projectId, fileName);</pre>
    <pre class="python">response = api.DeleteProjectFile(project_id, file_name)</pre>
</div>

<?php include(DOCS_RESOURCES."/qc-api/get-project-id-in-research.html"); ?>

<p>The <code>DeleteProjectFile</code> method returns a <code>RestResponse</code> object, which have the following attributes:</p>
<div data-tree='QuantConnect.Api.RestResponse'></div>