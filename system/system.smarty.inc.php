<?php
require("./system/libs/Smarty.class.php");			//����ģ���ļ�

class SmartyProject extends  Smarty{		//�����࣬�̳�ģ����
	
	function SmartyProject(){				//���巽��
		$this->template_dir = "./system/templates/";	//ָ��ģ���ļ��洢λ��
		$this->compile_dir = "./system/templates_c/";	//ָ�������ļ��洢λ��
		$this->config_dir = "./system/configs/";			//ָ�������ļ��洢λ��
		$this->cache_dir = "./system/cache/"; 			//ָ�������ļ��洢λ��
    }
} 

?>