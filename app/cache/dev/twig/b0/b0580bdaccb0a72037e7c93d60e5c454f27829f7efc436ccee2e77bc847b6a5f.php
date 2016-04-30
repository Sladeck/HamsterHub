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
        $__internal_d8721fd63977911a8c4b6d1e6b5c1f6b4b7dcf7a4c98caf257e026fc82765791 = $this->env->getExtension("native_profiler");
        $__internal_d8721fd63977911a8c4b6d1e6b5c1f6b4b7dcf7a4c98caf257e026fc82765791->enter($__internal_d8721fd63977911a8c4b6d1e6b5c1f6b4b7dcf7a4c98caf257e026fc82765791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d8721fd63977911a8c4b6d1e6b5c1f6b4b7dcf7a4c98caf257e026fc82765791->leave($__internal_d8721fd63977911a8c4b6d1e6b5c1f6b4b7dcf7a4c98caf257e026fc82765791_prof);

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
