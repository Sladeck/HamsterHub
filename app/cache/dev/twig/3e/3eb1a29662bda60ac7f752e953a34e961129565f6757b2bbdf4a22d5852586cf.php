<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a1c59dfebc6c7723ba5819a32778b1befb4df791f7ab2c4ea1ff5ae419f71fa7 extends Twig_Template
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
        $__internal_30fc304fe0db9afd9d384e66c0ff601eb16b1e94ca7120d03a9537ea231aaf7e = $this->env->getExtension("native_profiler");
        $__internal_30fc304fe0db9afd9d384e66c0ff601eb16b1e94ca7120d03a9537ea231aaf7e->enter($__internal_30fc304fe0db9afd9d384e66c0ff601eb16b1e94ca7120d03a9537ea231aaf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_30fc304fe0db9afd9d384e66c0ff601eb16b1e94ca7120d03a9537ea231aaf7e->leave($__internal_30fc304fe0db9afd9d384e66c0ff601eb16b1e94ca7120d03a9537ea231aaf7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
