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
        $__internal_c1d91e58f59a75a00109aececc976aa8063f8d7e415ddd23e0274120f681225c = $this->env->getExtension("native_profiler");
        $__internal_c1d91e58f59a75a00109aececc976aa8063f8d7e415ddd23e0274120f681225c->enter($__internal_c1d91e58f59a75a00109aececc976aa8063f8d7e415ddd23e0274120f681225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c1d91e58f59a75a00109aececc976aa8063f8d7e415ddd23e0274120f681225c->leave($__internal_c1d91e58f59a75a00109aececc976aa8063f8d7e415ddd23e0274120f681225c_prof);

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
