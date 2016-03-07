<?php
namespace Airavata\Model\Process;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


/**
 * ProcessModel: A structure holding the process details. The infromation is derived based on user provided
 *          configuration data or system inferred information from scheduling and QoS parameters.
 * 
 * processDetail:
 *   A friendly description of the process, usally used to communicate information to users.
 * 
 * 
 */
class ProcessModel {
  static $_TSPEC;

  /**
   * @var string
   */
  public $processId = "DO_NOT_SET_AT_CLIENTS";
  /**
   * @var string
   */
  public $experimentId = null;
  /**
   * @var int
   */
  public $creationTime = null;
  /**
   * @var int
   */
  public $lastUpdateTime = null;
  /**
   * @var \Airavata\Model\Status\ProcessStatus
   */
  public $processStatus = null;
  /**
   * @var string
   */
  public $processDetail = null;
  /**
   * @var string
   */
  public $applicationInterfaceId = null;
  /**
   * @var string
   */
  public $applicationDeploymentId = null;
  /**
   * @var string
   */
  public $computeResourceId = null;
  /**
   * @var \Airavata\Model\Application\Io\InputDataObjectType[]
   */
  public $processInputs = null;
  /**
   * @var \Airavata\Model\Application\Io\OutputDataObjectType[]
   */
  public $processOutputs = null;
  /**
   * @var \Airavata\Model\Scheduling\ComputationalResourceSchedulingModel
   */
  public $resourceSchedule = null;
  /**
   * @var \Airavata\Model\Task\TaskModel[]
   */
  public $tasks = null;
  /**
   * @var string
   */
  public $taskDag = null;
  /**
   * @var \Airavata\Model\Commons\ErrorModel
   */
  public $processError = null;
  /**
   * @var string
   */
  public $gatewayExecutionId = null;
  /**
   * @var bool
   */
  public $enableEmailNotification = null;
  /**
   * @var string[]
   */
  public $emailAddresses = null;
  /**
   * @var string
   */
  public $storageResourceId = null;
  /**
   * @var string
   */
  public $userDn = null;
  /**
   * @var bool
   */
  public $generateCert = false;
  /**
   * @var string
   */
  public $experimentDataDir = null;
  /**
   * @var bool
   */
  public $archive = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'processId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'experimentId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'creationTime',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'lastUpdateTime',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'processStatus',
          'type' => TType::STRUCT,
          'class' => '\Airavata\Model\Status\ProcessStatus',
          ),
        6 => array(
          'var' => 'processDetail',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'applicationInterfaceId',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'applicationDeploymentId',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'computeResourceId',
          'type' => TType::STRING,
          ),
        10 => array(
          'var' => 'processInputs',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Airavata\Model\Application\Io\InputDataObjectType',
            ),
          ),
        11 => array(
          'var' => 'processOutputs',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Airavata\Model\Application\Io\OutputDataObjectType',
            ),
          ),
        12 => array(
          'var' => 'resourceSchedule',
          'type' => TType::STRUCT,
          'class' => '\Airavata\Model\Scheduling\ComputationalResourceSchedulingModel',
          ),
        13 => array(
          'var' => 'tasks',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\Airavata\Model\Task\TaskModel',
            ),
          ),
        14 => array(
          'var' => 'taskDag',
          'type' => TType::STRING,
          ),
        15 => array(
          'var' => 'processError',
          'type' => TType::STRUCT,
          'class' => '\Airavata\Model\Commons\ErrorModel',
          ),
        16 => array(
          'var' => 'gatewayExecutionId',
          'type' => TType::STRING,
          ),
        17 => array(
          'var' => 'enableEmailNotification',
          'type' => TType::BOOL,
          ),
        18 => array(
          'var' => 'emailAddresses',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        19 => array(
          'var' => 'storageResourceId',
          'type' => TType::STRING,
          ),
        20 => array(
          'var' => 'userDn',
          'type' => TType::STRING,
          ),
        21 => array(
          'var' => 'generateCert',
          'type' => TType::BOOL,
          ),
        22 => array(
          'var' => 'experimentDataDir',
          'type' => TType::STRING,
          ),
        23 => array(
          'var' => 'archive',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['processId'])) {
        $this->processId = $vals['processId'];
      }
      if (isset($vals['experimentId'])) {
        $this->experimentId = $vals['experimentId'];
      }
      if (isset($vals['creationTime'])) {
        $this->creationTime = $vals['creationTime'];
      }
      if (isset($vals['lastUpdateTime'])) {
        $this->lastUpdateTime = $vals['lastUpdateTime'];
      }
      if (isset($vals['processStatus'])) {
        $this->processStatus = $vals['processStatus'];
      }
      if (isset($vals['processDetail'])) {
        $this->processDetail = $vals['processDetail'];
      }
      if (isset($vals['applicationInterfaceId'])) {
        $this->applicationInterfaceId = $vals['applicationInterfaceId'];
      }
      if (isset($vals['applicationDeploymentId'])) {
        $this->applicationDeploymentId = $vals['applicationDeploymentId'];
      }
      if (isset($vals['computeResourceId'])) {
        $this->computeResourceId = $vals['computeResourceId'];
      }
      if (isset($vals['processInputs'])) {
        $this->processInputs = $vals['processInputs'];
      }
      if (isset($vals['processOutputs'])) {
        $this->processOutputs = $vals['processOutputs'];
      }
      if (isset($vals['resourceSchedule'])) {
        $this->resourceSchedule = $vals['resourceSchedule'];
      }
      if (isset($vals['tasks'])) {
        $this->tasks = $vals['tasks'];
      }
      if (isset($vals['taskDag'])) {
        $this->taskDag = $vals['taskDag'];
      }
      if (isset($vals['processError'])) {
        $this->processError = $vals['processError'];
      }
      if (isset($vals['gatewayExecutionId'])) {
        $this->gatewayExecutionId = $vals['gatewayExecutionId'];
      }
      if (isset($vals['enableEmailNotification'])) {
        $this->enableEmailNotification = $vals['enableEmailNotification'];
      }
      if (isset($vals['emailAddresses'])) {
        $this->emailAddresses = $vals['emailAddresses'];
      }
      if (isset($vals['storageResourceId'])) {
        $this->storageResourceId = $vals['storageResourceId'];
      }
      if (isset($vals['userDn'])) {
        $this->userDn = $vals['userDn'];
      }
      if (isset($vals['generateCert'])) {
        $this->generateCert = $vals['generateCert'];
      }
      if (isset($vals['experimentDataDir'])) {
        $this->experimentDataDir = $vals['experimentDataDir'];
      }
      if (isset($vals['archive'])) {
        $this->archive = $vals['archive'];
      }
    }
  }

  public function getName() {
    return 'ProcessModel';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->processId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->experimentId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->creationTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->lastUpdateTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRUCT) {
            $this->processStatus = new \Airavata\Model\Status\ProcessStatus();
            $xfer += $this->processStatus->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->processDetail);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->applicationInterfaceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->applicationDeploymentId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->computeResourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::LST) {
            $this->processInputs = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new \Airavata\Model\Application\Io\InputDataObjectType();
              $xfer += $elem5->read($input);
              $this->processInputs []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::LST) {
            $this->processOutputs = array();
            $_size6 = 0;
            $_etype9 = 0;
            $xfer += $input->readListBegin($_etype9, $_size6);
            for ($_i10 = 0; $_i10 < $_size6; ++$_i10)
            {
              $elem11 = null;
              $elem11 = new \Airavata\Model\Application\Io\OutputDataObjectType();
              $xfer += $elem11->read($input);
              $this->processOutputs []= $elem11;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRUCT) {
            $this->resourceSchedule = new \Airavata\Model\Scheduling\ComputationalResourceSchedulingModel();
            $xfer += $this->resourceSchedule->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::LST) {
            $this->tasks = array();
            $_size12 = 0;
            $_etype15 = 0;
            $xfer += $input->readListBegin($_etype15, $_size12);
            for ($_i16 = 0; $_i16 < $_size12; ++$_i16)
            {
              $elem17 = null;
              $elem17 = new \Airavata\Model\Task\TaskModel();
              $xfer += $elem17->read($input);
              $this->tasks []= $elem17;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 14:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->taskDag);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 15:
          if ($ftype == TType::STRUCT) {
            $this->processError = new \Airavata\Model\Commons\ErrorModel();
            $xfer += $this->processError->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 16:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->gatewayExecutionId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 17:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableEmailNotification);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 18:
          if ($ftype == TType::LST) {
            $this->emailAddresses = array();
            $_size18 = 0;
            $_etype21 = 0;
            $xfer += $input->readListBegin($_etype21, $_size18);
            for ($_i22 = 0; $_i22 < $_size18; ++$_i22)
            {
              $elem23 = null;
              $xfer += $input->readString($elem23);
              $this->emailAddresses []= $elem23;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 19:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->storageResourceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 20:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->userDn);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 21:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->generateCert);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 22:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->experimentDataDir);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 23:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->archive);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ProcessModel');
    if ($this->processId !== null) {
      $xfer += $output->writeFieldBegin('processId', TType::STRING, 1);
      $xfer += $output->writeString($this->processId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->experimentId !== null) {
      $xfer += $output->writeFieldBegin('experimentId', TType::STRING, 2);
      $xfer += $output->writeString($this->experimentId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->creationTime !== null) {
      $xfer += $output->writeFieldBegin('creationTime', TType::I64, 3);
      $xfer += $output->writeI64($this->creationTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->lastUpdateTime !== null) {
      $xfer += $output->writeFieldBegin('lastUpdateTime', TType::I64, 4);
      $xfer += $output->writeI64($this->lastUpdateTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->processStatus !== null) {
      if (!is_object($this->processStatus)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('processStatus', TType::STRUCT, 5);
      $xfer += $this->processStatus->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->processDetail !== null) {
      $xfer += $output->writeFieldBegin('processDetail', TType::STRING, 6);
      $xfer += $output->writeString($this->processDetail);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->applicationInterfaceId !== null) {
      $xfer += $output->writeFieldBegin('applicationInterfaceId', TType::STRING, 7);
      $xfer += $output->writeString($this->applicationInterfaceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->applicationDeploymentId !== null) {
      $xfer += $output->writeFieldBegin('applicationDeploymentId', TType::STRING, 8);
      $xfer += $output->writeString($this->applicationDeploymentId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->computeResourceId !== null) {
      $xfer += $output->writeFieldBegin('computeResourceId', TType::STRING, 9);
      $xfer += $output->writeString($this->computeResourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->processInputs !== null) {
      if (!is_array($this->processInputs)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('processInputs', TType::LST, 10);
      {
        $output->writeListBegin(TType::STRUCT, count($this->processInputs));
        {
          foreach ($this->processInputs as $iter24)
          {
            $xfer += $iter24->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->processOutputs !== null) {
      if (!is_array($this->processOutputs)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('processOutputs', TType::LST, 11);
      {
        $output->writeListBegin(TType::STRUCT, count($this->processOutputs));
        {
          foreach ($this->processOutputs as $iter25)
          {
            $xfer += $iter25->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->resourceSchedule !== null) {
      if (!is_object($this->resourceSchedule)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('resourceSchedule', TType::STRUCT, 12);
      $xfer += $this->resourceSchedule->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tasks !== null) {
      if (!is_array($this->tasks)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('tasks', TType::LST, 13);
      {
        $output->writeListBegin(TType::STRUCT, count($this->tasks));
        {
          foreach ($this->tasks as $iter26)
          {
            $xfer += $iter26->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->taskDag !== null) {
      $xfer += $output->writeFieldBegin('taskDag', TType::STRING, 14);
      $xfer += $output->writeString($this->taskDag);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->processError !== null) {
      if (!is_object($this->processError)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('processError', TType::STRUCT, 15);
      $xfer += $this->processError->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->gatewayExecutionId !== null) {
      $xfer += $output->writeFieldBegin('gatewayExecutionId', TType::STRING, 16);
      $xfer += $output->writeString($this->gatewayExecutionId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableEmailNotification !== null) {
      $xfer += $output->writeFieldBegin('enableEmailNotification', TType::BOOL, 17);
      $xfer += $output->writeBool($this->enableEmailNotification);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->emailAddresses !== null) {
      if (!is_array($this->emailAddresses)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('emailAddresses', TType::LST, 18);
      {
        $output->writeListBegin(TType::STRING, count($this->emailAddresses));
        {
          foreach ($this->emailAddresses as $iter27)
          {
            $xfer += $output->writeString($iter27);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->storageResourceId !== null) {
      $xfer += $output->writeFieldBegin('storageResourceId', TType::STRING, 19);
      $xfer += $output->writeString($this->storageResourceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->userDn !== null) {
      $xfer += $output->writeFieldBegin('userDn', TType::STRING, 20);
      $xfer += $output->writeString($this->userDn);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->generateCert !== null) {
      $xfer += $output->writeFieldBegin('generateCert', TType::BOOL, 21);
      $xfer += $output->writeBool($this->generateCert);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->experimentDataDir !== null) {
      $xfer += $output->writeFieldBegin('experimentDataDir', TType::STRING, 22);
      $xfer += $output->writeString($this->experimentDataDir);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->archive !== null) {
      $xfer += $output->writeFieldBegin('archive', TType::BOOL, 23);
      $xfer += $output->writeBool($this->archive);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


