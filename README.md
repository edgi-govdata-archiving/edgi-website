# **IMPORTANT! We've moved development of this repo to the `main` branch. You will not be able to merge changes into `master`.**

## **UPDATING LOCAL CLONES**

(via [this link](https://www.hanselman.com/blog/EasilyRenameYourGitDefaultBranchFromMasterToMain.aspx), thanks!)

If you have a local clone, you can update and change your default branch with the steps below.

```sh
git checkout master
git branch -m master main
git fetch
git branch --unset-upstream
git branch -u origin/main
git symbolic-ref refs/remotes/origin/HEAD refs/remotes/origin/main
```

The above steps accomplish:

1. Go to the master branch
2. Rename master to main locally
3. Get the latest commits from the server
4. Remove the link to origin/master
5. Add a link to origin/main
6. Update the default branch to be origin/main

[![Code of Conduct](https://img.shields.io/badge/%E2%9D%A4-code%20of%20conduct-blue.svg?style=flat)](https://github.com/edgi-govdata-archiving/overview/blob/master/CONDUCT.md)

# edgi-website

Public repo for issues &amp; and project management for [EDGI's website](https://envirodatagov.org/), hosted on Wordpress.

## Adding Content

Protocols for getting content added are in the process of being created.

## Contributing to Development and Maintenance

If you'd like to contribute to the project, please read our [Contribution Guidelines](https://github.com/edgi-govdata-archiving/edgi-website/blob/master/CONTRIBUTING.md).

## Support

The best place to ask questions and get help is the `#website` channel in the [EDGI Slack](edgi.slack.com) team, if you are not on the slack, please [open an issue here](https://github.com/edgi-govdata-archiving/edgi-website/issues/new)!
