<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b237d82256d0eca9a5b64caec90ad413bda95685b8e2c68a98b184ad572716ec extends Twig_Template
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
        $__internal_3ff567296a8982969e8bd8269adfc6c4297698f0c23edafa7bc769294f07f736 = $this->env->getExtension("native_profiler");
        $__internal_3ff567296a8982969e8bd8269adfc6c4297698f0c23edafa7bc769294f07f736->enter($__internal_3ff567296a8982969e8bd8269adfc6c4297698f0c23edafa7bc769294f07f736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3ff567296a8982969e8bd8269adfc6c4297698f0c23edafa7bc769294f07f736->leave($__internal_3ff567296a8982969e8bd8269adfc6c4297698f0c23edafa7bc769294f07f736_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
