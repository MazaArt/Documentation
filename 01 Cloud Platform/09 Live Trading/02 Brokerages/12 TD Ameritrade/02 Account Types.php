<p>TD Ameritrade supports cash and margin accounts.<br></p>

<?php echo file_get_contents(DOCS_RESOURCES."/brokerages/set-brokerage-model/td-ameritrade.html"); ?>

<h4>Create an Account</h4>
<p>Follow the <a rel='nofollow' target='_blank' href='https://start.tdameritrade.com'>account creation wizard</a> on the TD Ameritrade website to create a TD Ameritrade account.</p>

<p>You will need API credentials to deploy live algorithms with your brokerage account. After you open your account, see the following resources to create API credentials and then store them somewhere safe:</p>

<ul>
    <li><a rel='nofollow' target='_blank' href='https://www.reddit.com/r/algotrading/comments/c81vzq/td_ameritrade_api_access_2019_guide/'>TD Ameritrade API Access - 2019 Guide</a> on r/algotrading</li>
    <li><a rel='nofollow' target='_blank' href='https://developer.tdameritrade.com/content/authentication-faq'>Authentication FAQ</a> on the TD Ameritrade website</li>
</ul>

<h4>Paper Trading</h4>

<p>The TD Ameritrade API doesn't support paper trading, but you can follow these steps to simulate it:</p>

<ol>
    <li>In the <code>Initialize</code> method of your algorithm, add one of the preceding <code>SetBrokerageModel</code> method calls.</li>
    <li><a href="/docs/v2/cloud-platform/live-trading/brokerages/quantconnect-paper-trading#14-Deploy-Live-Algorithms">Deploy your algorithm with the QuantConnect Paper Trading brokerage</a>.</li>
</ol>