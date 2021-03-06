<?php

use yii\db\Migration;

class m170802_011259_sys_addons extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%sys_addons}}', [
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'name' => 'varchar(40) NOT NULL COMMENT \'插件名或标识\'',
            'title' => 'varchar(20) NOT NULL DEFAULT \'\' COMMENT \'中文名\'',
            'cover' => 'varchar(1000) NULL',
            'group' => 'varchar(20) NULL COMMENT \'组别\'',
            'type' => 'varchar(20) NULL COMMENT \'类别\'',
            'description' => 'text NULL COMMENT \'插件描述\'',
            'status' => 'tinyint(1) NOT NULL DEFAULT \'1\' COMMENT \'状态\'',
            'config' => 'text NULL COMMENT \'配置\'',
            'setting' => 'tinyint(1) NULL DEFAULT \'-1\'',
            'hook' => 'tinyint(1) NULL DEFAULT \'-1\' COMMENT \'钩子\'',
            'author' => 'varchar(40) NULL DEFAULT \'\' COMMENT \'作者\'',
            'version' => 'varchar(20) NULL DEFAULT \'\' COMMENT \'版本号\'',
            'wechat_message' => 'varchar(1000) NULL COMMENT \'接收微信回复类别\'',
            'append' => 'int(10) unsigned NOT NULL COMMENT \'安装时间\'',
            'updated' => 'int(10) unsigned NOT NULL COMMENT \'是否有后台列表\'',
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='插件表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%sys_addons}}',['id'=>'8','name'=>'AppManual','title'=>'开发手册','cover'=>NULL,'group'=>NULL,'type'=>'services','description'=>'网站说明文档，支持马克笔记编写','status'=>'1','config'=>NULL,'setting'=>'1','hook'=>'-1','author'=>'简言','version'=>'1.0','wechat_message'=>'a:0:{}','append'=>'1501226078','updated'=>'1501226078']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%sys_addons}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

