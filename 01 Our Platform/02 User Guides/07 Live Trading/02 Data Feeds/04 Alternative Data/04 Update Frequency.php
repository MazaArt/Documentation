<p>Alternative <a href="/docs/v2/our-platform/user-guides/datasets/vendors">dataset Vendors</a> send us data points throughout the day. If your algorithm subscribes to alternative datasets, Lean checks our storage system for new data points at various frequencies, depending on the resolution of the dataset subscription. When Lean finds new data points, they are immediately inject them into your algorithm. The following table shows the polling frequency of each resolution:</p>


<?php include(DOCS_RESOURCES."/live-dataset-polling-frequency-table.html"); ?>

<p>For example, if we receive a new data point at 9:51am for a dataset for which your algorithm has a daily subscription, your algorithm will discover the new data point between 9:51am and 10:21am. The timestamps of alternative data can be in various timezones, including UTC, NY, and Chicago. <a href="/docs/v2/our-platform/tutorials/datasets/inspecting-datasets#02-View-Dataset-Listing">Check the dataset listing page</a> to see the timezone of the dataset that you're using.</p>
