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
        $__internal_e84414632bfa465f69e84491d322c2866c78915dc8f6d7f12777b7f54b3b077c = $this->env->getExtension("native_profiler");
        $__internal_e84414632bfa465f69e84491d322c2866c78915dc8f6d7f12777b7f54b3b077c->enter($__internal_e84414632bfa465f69e84491d322c2866c78915dc8f6d7f12777b7f54b3b077c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e84414632bfa465f69e84491d322c2866c78915dc8f6d7f12777b7f54b3b077c->leave($__internal_e84414632bfa465f69e84491d322c2866c78915dc8f6d7f12777b7f54b3b077c_prof);

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
