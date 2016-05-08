<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b609749d4abc71de549bc0f0c4dec51f190208ed8427bf7790dc42f1983657b0 extends Twig_Template
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
        $__internal_bf6952757985840d4e48d4d6cc61e73eb9c8e74c64f8a4167f4e62abcd859f59 = $this->env->getExtension("native_profiler");
        $__internal_bf6952757985840d4e48d4d6cc61e73eb9c8e74c64f8a4167f4e62abcd859f59->enter($__internal_bf6952757985840d4e48d4d6cc61e73eb9c8e74c64f8a4167f4e62abcd859f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bf6952757985840d4e48d4d6cc61e73eb9c8e74c64f8a4167f4e62abcd859f59->leave($__internal_bf6952757985840d4e48d4d6cc61e73eb9c8e74c64f8a4167f4e62abcd859f59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
