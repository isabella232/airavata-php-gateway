/*
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
*/
package org.apache.airavata.gfac.gsissh.security;

import org.apache.airavata.credential.store.store.CredentialReader;
import org.apache.airavata.gfac.AbstractSecurityContext;
import org.apache.airavata.gfac.RequestData;
import org.apache.airavata.gfac.core.cluster.Cluster;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

/**
 * Handles GRID related security.
 */
public class GSISecurityContext extends AbstractSecurityContext {

    protected static final Logger log = LoggerFactory.getLogger(GSISecurityContext.class);
    /*
     * context name
     */

    private Cluster pbsCluster = null;


    public GSISecurityContext(CredentialReader credentialReader, RequestData requestData, Cluster pbsCluster) {
        super(credentialReader, requestData);
        this.pbsCluster = pbsCluster;
    }


    public GSISecurityContext(CredentialReader credentialReader, RequestData requestData) {
        super(credentialReader, requestData);
    }


    public GSISecurityContext(Cluster pbsCluster) {
        this.setPbsCluster(pbsCluster);
    }



    public Cluster getPbsCluster() {
        return pbsCluster;
    }

    public void setPbsCluster(Cluster pbsCluster) {
        this.pbsCluster = pbsCluster;
    }
}
