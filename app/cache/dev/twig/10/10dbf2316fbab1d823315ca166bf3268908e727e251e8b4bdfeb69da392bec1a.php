<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b7fe43f2eb3131342e95b65de9aeae7b35c23f63c88170a9e48d1b20e3e8067c extends Twig_Template
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
        $__internal_a6ce179fc55b839876075676ca8f907151ed2cbfc440090ef55de78883de4562 = $this->env->getExtension("native_profiler");
        $__internal_a6ce179fc55b839876075676ca8f907151ed2cbfc440090ef55de78883de4562->enter($__internal_a6ce179fc55b839876075676ca8f907151ed2cbfc440090ef55de78883de4562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a6ce179fc55b839876075676ca8f907151ed2cbfc440090ef55de78883de4562->leave($__internal_a6ce179fc55b839876075676ca8f907151ed2cbfc440090ef55de78883de4562_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
