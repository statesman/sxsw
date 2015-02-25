SXSW Side Parties database
============================

## Mobile play
Bootstrap used for reponsive display. There are custom Caspio search datapages to handle smaller screens, hidden and shown via Bootstrap utility classes.

## Social play
Standard navigation share buttons, but they are set to go to the base url. It would be best if we could share individual party detail pages, but there are some limitations with Caspio and the url structure that make that difficult. It's an enhancement issue.

## 2015 lowdown

The guts of this was pulled from our 2014 version built with Foundand and updated to our [single-use-project](https://github.com/statesman/single-page-project) template.

The data for this project is managed through [Caspio](http://www.caspio.com/), which we've done for several years. In 2014 and again in 2015, we utilize a responsive framework to make it mobile friendly, in some cases creating specific Caspio datapages for smaller media queries.

The detail page uses the Caspio [SEO Deployment](http://www.caspio.com/extend/platform-extensions/seo-data-publishing.aspx) which is flaky at best. When I tried to use the current code, it broke all to hell, so I used the deploy code that I had from 2014 and just updated the datapage key.