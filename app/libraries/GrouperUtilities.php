<?php

use Airavata\Model\Group\ResourceType;
use Airavata\Model\Group\ResourcePermissionType;

class GrouperUtilities
{

    /**
     * @return mixed                array of usernames of the users in the gateway
     */
    public static function getAllGatewayUsers()
    {
        return Airavata::getAllUsersInGateway(Session::get('authz-token'), Config::get('pga_config.airavata')['gateway-id']);
    }

    /**
     * @param $resourceId           Experiment or Project ID
     * @param $dataResourceType     e.g Airavata\Model\Group\ResourceType:PROJECT,Airavata\Model\Group\ResourceType:EXPERIMENT
     * @param $userPermissionMap    A map of map<username,Airavata\Model\Group\ResourcePermissionType>
     */
    public static function shareResourceWithUsers($resourceId, $dataResourceType, $userPermissionMap)
    {
        $newUserPermissionsMap = [];
        foreach($userPermissionMap as $key=> $value){
            if (strpos($key, '@') !== false) {
                $parts = explode('@', $key);
                $key = $parts[0] . "@" . Config::get('pga_config.airavata')['gateway-id'];
            }else{
                $key = $key . "@" . Config::get('pga_config.airavata')['gateway-id'];
            }
            $newUserPermissionsMap[$key] = $value;
        }
        Airavata::shareResourceWithUsers(Session::get('authz-token'), $resourceId, $dataResourceType, $newUserPermissionsMap);
    }

    /**
     * @param $resourceId           Experiment or Project ID
     * @param $dataResourceType     e.g Airavata\Model\Group\ResourceType:PROJECT,Airavata\Model\Group\ResourceType:EXPERIMENT
     * @param $userPermissionMap    A map of map<username,Airavata\Model\Group\ResourcePermissionType>
     */
    public static function revokeSharingOfResourceFromUsers($resourceId, $dataResourceType, $userPermissionMap)
    {
        $newUserPermissionsMap = [];
        foreach($userPermissionMap as $key=> $value){
            if (strpos($key, '@') !== false) {
                $parts = explode('@', $key);
                $key = $parts[0] . "@" . Config::get('pga_config.airavata')['gateway-id'];
            }else{
                $key = $key . "@" . Config::get('pga_config.airavata')['gateway-id'];
            }
            $newUserPermissionsMap[$key] = $value;
        }
        Airavata::revokeSharingOfResourceFromUsers(Session::get('authz-token'), $resourceId, $dataResourceType, $newUserPermissionsMap);
    }

    /**
     * @param $resourceId        Experiment or Project ID
     * @param $dataResourceType  e.g Airavata\Model\Group\ResourceType:PROJECT,Airavata\Model\Group\ResourceType:EXPERIMENT
     * @param $permissionType    e.g Airavata\Model\Group\ResourcePermissionType::READ, Airavata\Model\Group\ResourcePermissionType::WRITE
     * @return array             array of usernames
     */
    public static function getAllAccessibleUsers($resourceId, $dataResourceType, $permissionType)
    {
        $temp = Airavata::getAllAccessibleUsers(Session::get('authz-token'), $resourceId, $dataResourceType, $permissionType);
        $userList = [];
        foreach ($temp as $key => $u) {
            if (strpos($u, '@') !== false) {
                $parts = explode('@', $u);
                $u = $parts[0];
            }
            $userList[] = $u;
        }

        return $userList;
    }

    /**
     * @param $group            Airavata/Model/Group/GrouoModel
     */
    public static function createGroup($group){
        if (strpos($group->ownerId, '@') !== false) {
            $parts = explode('@', $group->ownerId);
            $group->ownerId = $parts[0] . "@" . Config::get('pga_config.airavata')['gateway-id'];
        }else{
            $group->ownerId = $group->ownerId . "@" . Config::get('pga_config.airavata')['gateway-id'];
        }
        Airavata::createGroup(Session::get('authz-token'),$group);
    }


    /**
     * @param $group            Airavata/Model/Group/GrouoModel
     */
    public static function updateGroup($group){
        if (strpos($group->ownerId, '@') !== false) {
            $parts = explode('@', $group->ownerId);
            $group->ownerId = $parts[0] . "@" . Config::get('pga_config.airavata')['gateway-id'];
        }else{
            $group->ownerId = $group->ownerId . "@" . Config::get('pga_config.airavata')['gateway-id'];
        }
        Airavata::updateGroup(Session::get('authz-token'),$group);
    }


    /**
     * @param $groupId
     * @param $ownerName
     */
    public static function deleteGroup($groupId, $ownerName){
        if (strpos($ownerName, '@') !== false) {
            $parts = explode('@', $ownerName);
            $ownerName = $parts[0];
        }

        Airavata::deleteGroup(Session::get('authz-token'), $groupId, $ownerName, Config::get('pga_config.airavata')['gateway-id']);
    }

    /**
     * @param $groupId
     */
    public static function getGroup($groupId){
        return Airavata::getGroup(Session::get('authz-token'),$groupId);
    }


    /**
     * @param $userName
     * @return mixed
     */
    public static function getAllGroupsUserBelongs($userName){
        if (strpos($userName, '@') !== false) {
            $parts = explode('@', $userName);
            $userName = $parts[0];
        }

        return Airavata::getAllGroupsUserBelongs(Session::get('authz-token'), $userName,
            Config::get('pga_config.airavata')['gateway-id']);
    }

}