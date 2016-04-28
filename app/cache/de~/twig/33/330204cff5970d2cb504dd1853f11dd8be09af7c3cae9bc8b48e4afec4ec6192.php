<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b3647ed71dd09f7f7caf2d624f97b45fcbec7d01757738fd7333c351084f081a extends Twig_Template
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
        $__internal_24d017fc8e4ed37d73dc070e7c7a5306b379a4c1c6dda5d3aa5f12687065a751 = $this->env->getExtension("native_profiler");
        $__internal_24d017fc8e4ed37d73dc070e7c7a5306b379a4c1c6dda5d3aa5f12687065a751->enter($__internal_24d017fc8e4ed37d73dc070e7c7a5306b379a4c1c6dda5d3aa5f12687065a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_24d017fc8e4ed37d73dc070e7c7a5306b379a4c1c6dda5d3aa5f12687065a751->leave($__internal_24d017fc8e4ed37d73dc070e7c7a5306b379a4c1c6dda5d3aa5f12687065a751_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
