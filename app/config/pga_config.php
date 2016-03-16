<?php
return array(
    /**
     * *****************************************************************
     *  WSO2 Identity Server Related Configurations
     * *****************************************************************
     */

    'wsis' => [

        /**
         * Admin Role Name
         */
        'admin-role-name' => 'sg_admin',

        /**
         * Read only Admin Role Name
         */
        'read-only-admin-role-name' => 'sg_admin_read_only',

        /**
         * Gateway user role
         */
        'user-role-name' => 'sg_user',

        /**
         * Tenant Domain
         */
        'tenant-domain' => 'prod.seagrid',

        /**
         * Tenant admin's username
         */
        'admin-username' => 'admin',

        /**
         * Tenant admin's password
         */
        'admin-password' => 'seagr1d_@dmin',

        /**
         * OAuth client key
         */
        'oauth-client-key' => 'y7xgdnNUx6ifOswJTPcqtzw4aOEa',

        /**
         * OAuth client secret
         */
        'oauth-client-secret' => 'CgfbuupAPhaOBSBPSScZUWHNANwa',

//        /**
//         * Tenant Domain
//         */
//        'tenant-domain' => 'master.airavata',
//
//        /**
//         * Tenant admin's username
//         */
//        'admin-username' => 'master',
//
//        /**
//         * Tenant admin's password
//         */
//        'admin-password' => 'master',
//
//        /**
//         * OAuth client key
//         */
//        'oauth-client-key' => '5_GFR88Nzd4XvGthSMF1fnOJPuMa',
//
//        /**
//         * OAuth client secret
//         */
//        'oauth-client-secret' => 'KNTf_LPLuGBDbRVZwkrP_fF5z2Ea',

        /**
         * Identity server domain
         */
        'server' => 'idp.scigap.org',

        /**
         * Identity server url
         */
        'service-url' => 'https://idp.scigap.org:9443/',

        /**
         * Enable HTTPS server verification
         */
        'verify-peer' => true,

        /**
         * Path to the server certificate file
         */
        'cafile-path' => app_path() . '/resources/security/idp_scigap_org.pem',

        /**
         * Allow self signed server certificates
         */
        'allow-self-signed-cert' => false
    ],


    /**
     * *****************************************************************
     *  Airavata Client Configurations
     * *****************************************************************
     */
    'airavata' => [

        /**
         * Airavata API server location. Use tls:// as the protocol to
         * connect TLS enabled Airavata
         */
        'airavata-server' => 'gw56.iu.xsede.org',

        /**
         * Airavata API server port
         */
        'airavata-port' => '8930',

        /**
         * Airavata API server thrift communication timeout
         */
        'airavata-timeout' => '1000000',

        /**
         * PGA Gateway ID
         */
        'gateway-id' => 'seagrid',

        /**
         * Maximum size of a file which is allowed to upload to the server
         */
        'server-allowed-file-size' => 64,

        /**
         * absolute path of the data dir
         */
        'experiment-data-absolute-path' => '/Users/supun',

        /**
         * Advanced experiments options
         */
        'advanced-experiment-options' => '',

        /**
         * Default queue name
         */
        'queue-name' => 'long',

        /**
         * Default node count
         */
        'node-count' => '1',

        /**
         * Default total core count
         */
        'total-cpu-count' => '16',

        /**
         * Default wall time limit
         */
        'wall-time-limit' => '30',

        /**
         * Enable app-catalog cache
         */
        'enable-app-catalog-cache' => true,

        /**
         * Life time of app catalog data cache in minutes
         */
        'app-catalog-cache-duration' => 5
    ],

    /**
     * *****************************************************************
     *  Portal Related Configurations
     * *****************************************************************
     */
    'portal' => [
        /**
         * Whether this portal is the SciGaP admin portal
         */
        'super-admin-portal' => false,

        /**
         * Set the name of theme in use here
         */
        'theme' => 'seagrid',

        /**
         * Portal title
         */
        'portal-title' => 'Airavata PHP Gateway',

        /**
         * Email address of the portal admin. Portal admin well get email notifications for events
         * such as new user creation
         */
        'admin-emails' => ['xxx@xxx.com','yyy@yyy.com'],

        /**
         * Email account that the portal should login to send emails
         */
        'portal-email-username' => 'xyz@abc.com',

        /**
         * Password for the portal's email account
         */
        'portal-email-password' => 'xxxxxxxxxxx',

        /**
         * SMTP server on which the portal should connect
         */
        'portal-smtp-server-host' => 'smtp.gmail.com',

        /**
         * SMTP server port on which the portal should connect
         */
        'portal-smtp-server-port' => '587',

        /**
         * Set JIRA Issue Collector scripts here.
         */
        'jira-help' => 
        [
            /**
             * Report Issue Script issued for your app by Atlassian JIRA
             */
            'report-issue-script' => '',
            /**
             * Collector id at the end of the above script
             */
            'report-issue-collector-id' => '',
            /**
             * Create Report Script issued for your app by Atlassian JIRA
             */
            'request-feature-script' => '',
            /**
             * Collector id at the end of the above script
             */
            'request-feature-collector-id' => ''
        ],

        /**
         * Set Google Analytics Id here. ID format that generates from  
         * creating tracker object should be 
         *
         * UA-XXXXX-Y 
         *
         * for it to be working correctly. Currently it is only set for 
         * sending pageviews.
         */
        'google-analytics-id' => ''
    ]
);
