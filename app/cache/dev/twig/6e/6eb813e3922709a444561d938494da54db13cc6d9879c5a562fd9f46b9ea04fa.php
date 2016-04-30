<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f93346dac361721ac742561883058b6027182ea7edb91e4e447107b2f6c03a23 extends Twig_Template
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
        $__internal_3caa06468a14742dd535593e4fc47d011a1526d83317aed37bd208f0af11d602 = $this->env->getExtension("native_profiler");
        $__internal_3caa06468a14742dd535593e4fc47d011a1526d83317aed37bd208f0af11d602->enter($__internal_3caa06468a14742dd535593e4fc47d011a1526d83317aed37bd208f0af11d602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3caa06468a14742dd535593e4fc47d011a1526d83317aed37bd208f0af11d602->leave($__internal_3caa06468a14742dd535593e4fc47d011a1526d83317aed37bd208f0af11d602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
