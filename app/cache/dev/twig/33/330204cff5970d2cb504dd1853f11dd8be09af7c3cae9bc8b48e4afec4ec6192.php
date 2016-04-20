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
        $__internal_1f7b4a4a4a8a1c2d1d115acdc655a27a6b950da4644b6b512a3c9fd9b2a3bce7 = $this->env->getExtension("native_profiler");
        $__internal_1f7b4a4a4a8a1c2d1d115acdc655a27a6b950da4644b6b512a3c9fd9b2a3bce7->enter($__internal_1f7b4a4a4a8a1c2d1d115acdc655a27a6b950da4644b6b512a3c9fd9b2a3bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1f7b4a4a4a8a1c2d1d115acdc655a27a6b950da4644b6b512a3c9fd9b2a3bce7->leave($__internal_1f7b4a4a4a8a1c2d1d115acdc655a27a6b950da4644b6b512a3c9fd9b2a3bce7_prof);

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
