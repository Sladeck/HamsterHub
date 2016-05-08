<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_41132b924201d06e41d9d829cd56a119fe09c379dfffdd69406b280f3cfb7e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd9f5cd240063000c7899ded480d79c22d4cbb630982edc54ba287f2cc0366b = $this->env->getExtension("native_profiler");
        $__internal_9dd9f5cd240063000c7899ded480d79c22d4cbb630982edc54ba287f2cc0366b->enter($__internal_9dd9f5cd240063000c7899ded480d79c22d4cbb630982edc54ba287f2cc0366b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9dd9f5cd240063000c7899ded480d79c22d4cbb630982edc54ba287f2cc0366b->leave($__internal_9dd9f5cd240063000c7899ded480d79c22d4cbb630982edc54ba287f2cc0366b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
