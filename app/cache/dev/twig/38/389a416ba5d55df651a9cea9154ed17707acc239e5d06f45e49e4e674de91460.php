<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_74c7b49727b8b295666d8c3edb1ad99063bfbc6cbb40116a60110f86dc0281b3 extends Twig_Template
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
        $__internal_825a7f2769aab9bd8c62886a4401aa8a9de854f6b772bd6b40aa1a14b951ed8f = $this->env->getExtension("native_profiler");
        $__internal_825a7f2769aab9bd8c62886a4401aa8a9de854f6b772bd6b40aa1a14b951ed8f->enter($__internal_825a7f2769aab9bd8c62886a4401aa8a9de854f6b772bd6b40aa1a14b951ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_825a7f2769aab9bd8c62886a4401aa8a9de854f6b772bd6b40aa1a14b951ed8f->leave($__internal_825a7f2769aab9bd8c62886a4401aa8a9de854f6b772bd6b40aa1a14b951ed8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
