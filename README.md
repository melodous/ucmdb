# ucmdb - App used in Ansible Tower demo

<blockquote> <i>Note: step 1 prepares an Openshift demo environment, if you already have an operational Openshift environment, you can start from step 2.</i> </blockquote>

1.  Prepare Openshift environment. <br />
    For demo purposes you can use Openshift CDK (https://developers.redhat.com/products/cdk/download/)

<pre>    $ wget https://developers.redhat.com/download-manager/file/cdk-3.0.beta-minishift-linux-amd64
    # mv cdk-3.0.beta-minishift-linux-amd64 /bin/minishift
    
    $ minishift setup-cdk
    [...]
    CDK 3 setup complete.
    
    $ minishift start --username <i>Red_Hat_username</i>  --password <i>Red_Hat_password</i> 
    Starting local OpenShift cluster using 'kvm' hypervisor...
    [...]
    To login as administrator:
        oc login -u system:admin </pre>

2.  Create a project called "ucmdb"
<pre>
    $ oc new-project ucmdb</pre>

3.  Import ucmdb tempate:<br />
<pre> $ oc create -f https://raw.githubusercontent.com/jmnohales/OCP_PHP_Demo/ucmdb/ucmdb_template.yml</pre>
