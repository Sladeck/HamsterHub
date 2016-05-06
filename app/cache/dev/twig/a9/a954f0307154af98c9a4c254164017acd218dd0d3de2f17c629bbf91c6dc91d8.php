<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4ae93f71c978fc2e8f1a988663b97f5e254b48053119642cc076e54ad5ed5a4e extends Twig_Template
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
        $__internal_aa32aaac7b3a72fd7d6b6a6b11bf3c814fdf80e941decda907d05f5ca2bd6b48 = $this->env->getExtension("native_profiler");
        $__internal_aa32aaac7b3a72fd7d6b6a6b11bf3c814fdf80e941decda907d05f5ca2bd6b48->enter($__internal_aa32aaac7b3a72fd7d6b6a6b11bf3c814fdf80e941decda907d05f5ca2bd6b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_aa32aaac7b3a72fd7d6b6a6b11bf3c814fdf80e941decda907d05f5ca2bd6b48->leave($__internal_aa32aaac7b3a72fd7d6b6a6b11bf3c814fdf80e941decda907d05f5ca2bd6b48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
