<p>
    Asynchronous universe selection utilizes concurrent execution to increase the speed of your algorithm. 
    If you enable this setting, abide by the following rules:
</p>

<ul>
    <li>Don't make any <a href='/docs/v2/writing-algorithms/historical-data/history-requests'>history requests</a> in your <a href='/docs/v2/writing-algorithms/universes/key-concepts#05-Selection-Functions'>filter function</a>. History requests can only provide data up to the <a href='/docs/v2/writing-algorithms/key-concepts/time-modeling/timeslices#02-Time-Frontier'>algorithm time</a>, but if your filter function runs asynchronously, the algorithm time may not be what you expect.</li>
    <li>Don't use the portfolio or security state. The <code>Portfolio</code> and <code>Securities</code> objects are also functions of the algorithm time.</li>
    <li>If your filter function updates a class variable, don't update the class variable anywhere else in your algorithm.</li>
</ul>
    
<p>To enable asynchronous universe selection, in the <code>Initialize</code> method, set the <code>Asynchronous</code> property to <code class="csharp">true</code><code class="python">True</code> before you add a universe.</p>

<div class="section-example-container">
    <pre class="csharp">UniverseSettings.Asynchronous = true;
AddUniverse(MyFundamentalFilterFunction);
var option = AddOption("SPY");
option.SetFilter(u =&gt; u.Strikes(-10, 10).Expiration(0, 30));</pre>
    <pre class="python">self.UniverseSettings.Asynchronous = True
self.AddUniverse(self.MyFundamentalFilterFunction)
option = self.AddOption("SPY")
option.SetFilter(lambda u: u.Strikes(-10, 10).Expiration(0, 30))</pre>
</div>