<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0f24d64116c48d795876d3c88ca7289af195fde7098fe4dd93d448ed8fc6351d extends Twig_Template
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
        $__internal_7f15edc3683fec813d625db261d9a6d174677a73c00f449fcfe00b3048ee59ce = $this->env->getExtension("native_profiler");
        $__internal_7f15edc3683fec813d625db261d9a6d174677a73c00f449fcfe00b3048ee59ce->enter($__internal_7f15edc3683fec813d625db261d9a6d174677a73c00f449fcfe00b3048ee59ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7f15edc3683fec813d625db261d9a6d174677a73c00f449fcfe00b3048ee59ce->leave($__internal_7f15edc3683fec813d625db261d9a6d174677a73c00f449fcfe00b3048ee59ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
