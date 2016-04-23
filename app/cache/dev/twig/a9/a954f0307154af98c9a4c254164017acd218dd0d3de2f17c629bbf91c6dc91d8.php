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
        $__internal_da286a22ecf4a134f7c7640ab6043f92c7418e5cdb56e8b9c921a51946ae4a81 = $this->env->getExtension("native_profiler");
        $__internal_da286a22ecf4a134f7c7640ab6043f92c7418e5cdb56e8b9c921a51946ae4a81->enter($__internal_da286a22ecf4a134f7c7640ab6043f92c7418e5cdb56e8b9c921a51946ae4a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_da286a22ecf4a134f7c7640ab6043f92c7418e5cdb56e8b9c921a51946ae4a81->leave($__internal_da286a22ecf4a134f7c7640ab6043f92c7418e5cdb56e8b9c921a51946ae4a81_prof);

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
