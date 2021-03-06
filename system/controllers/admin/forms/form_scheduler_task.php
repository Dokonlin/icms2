<?php
class formAdminSchedulerTask extends cmsForm {

    public function init() {

        return array(

            array(
                'type' => 'fieldset',
                'childs' => array(

                    new fieldString('title', array(
                        'title' => LANG_DESCRIPTION,
                        'rules' => array(
                            array('required'),
                        )
                    )),

                    new fieldString('controller', array(
                        'title' => LANG_CP_SCHEDULER_TASK_CONTROLLER,
                        'rules' => array(
                            array('required'),
                        )
                    )),

                    new fieldString('hook', array(
                        'title' => LANG_CP_SCHEDULER_TASK_HOOK,
                        'rules' => array(
                            array('required'),
                        )
                    )),

                    new fieldNumber('period', array(
                        'title' => LANG_CP_SCHEDULER_TASK_PERIOD,
                        'rules' => array(
                            array('required'),
                            array('min', 1)
                        )
                    )),

                    new fieldCheckbox('is_active', array(
                        'title' => LANG_CP_SCHEDULER_TASK_IS_ACTIVE,
                    )),


                )
            ),

        );

    }


}
