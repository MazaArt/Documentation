<p>To get the logs of a live algorithm, call the <code>ReadLiveLogs</code> method with the project Id and deployment ID.</p>

<div class="section-example-container">
    <pre class="csharp">var liveLogs = api.ReadLiveLogs(projectId, deployId);</pre>
    <pre class="python">liveLogs = api.ReadLiveLogs(project_id, deploy_id)</pre>
</div>

<?php include(DOCS_RESOURCES."/qc-api/get-project-id-in-research.html"); ?>
<?php include(DOCS_RESOURCES."/qc-api/get-deployment-id-in-research.html"); ?>

<p>The <code>ReadLiveLogs</code> method accepts the following additional arguments so you can select the time period of the logs to return:</p>
<table class="qc-table table">
    <thead>
        <tr>
            <th>Argument</th>
            <th>Data Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>startTime</code></td>
	    <td><code class='csharp'>DateTime</code><code class='python'>datetime</code></td>
            <td>No logs will be returned before this time</td>
        </tr>
        <tr>
            <td><code>endTime</code></td>
	    <td><code class='csharp'>DateTime</code><code class='python'>datetime</code></td>
            <td>No logs will be returned after this time</td>
        </tr>
    </tbody>
</table>

    <div class="section-example-container">
        <pre class="csharp">var liveLogs = api.ReadLiveLogs(projectId: projectId, 
                                algorithmId: deployId,
                                startTime: new DateTime(2022, 1, 31),
                                endTime: new DateTime(2022, 2, 3));</pre>
        <pre class="python">liveLogs = api.ReadLiveLogs(projectId=project_id, 
                            algorithmId=deploy_id,
                            startTime=datetime(2022, 1, 31),
                            endTime=datetime(2022, 2, 3))</pre>
    </div>

<p>The <code>ReadLiveLogs</code> method returns a <code>LiveLog</code> object, which have the following attributes:</p>
<div data-tree='QuantConnect.Api.LiveLog'></div>