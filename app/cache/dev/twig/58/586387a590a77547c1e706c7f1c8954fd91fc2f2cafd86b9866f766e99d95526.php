<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6147e9a7e45e40f5dfcb701f260b2145055b586ab7c197112ef997ba1e8984f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff771681dd03a97cce1c4f9dbf25beaf53fd246754d13bcdf7d8723248bb07ac = $this->env->getExtension("native_profiler");
        $__internal_ff771681dd03a97cce1c4f9dbf25beaf53fd246754d13bcdf7d8723248bb07ac->enter($__internal_ff771681dd03a97cce1c4f9dbf25beaf53fd246754d13bcdf7d8723248bb07ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff771681dd03a97cce1c4f9dbf25beaf53fd246754d13bcdf7d8723248bb07ac->leave($__internal_ff771681dd03a97cce1c4f9dbf25beaf53fd246754d13bcdf7d8723248bb07ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5d6d60eec5770024c482002f5c4ad2ecfb6d84b8c2de0fd58363820f639df2f = $this->env->getExtension("native_profiler");
        $__internal_c5d6d60eec5770024c482002f5c4ad2ecfb6d84b8c2de0fd58363820f639df2f->enter($__internal_c5d6d60eec5770024c482002f5c4ad2ecfb6d84b8c2de0fd58363820f639df2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c5d6d60eec5770024c482002f5c4ad2ecfb6d84b8c2de0fd58363820f639df2f->leave($__internal_c5d6d60eec5770024c482002f5c4ad2ecfb6d84b8c2de0fd58363820f639df2f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb969d8bd69d634257439befea09895ac2db84414ccbb286110415a40a466b2f = $this->env->getExtension("native_profiler");
        $__internal_bb969d8bd69d634257439befea09895ac2db84414ccbb286110415a40a466b2f->enter($__internal_bb969d8bd69d634257439befea09895ac2db84414ccbb286110415a40a466b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb969d8bd69d634257439befea09895ac2db84414ccbb286110415a40a466b2f->leave($__internal_bb969d8bd69d634257439befea09895ac2db84414ccbb286110415a40a466b2f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35599311fc73ec28b81c9a1ae66e82e37ff81ad9fdb40d2d2f45d67638cd6a01 = $this->env->getExtension("native_profiler");
        $__internal_35599311fc73ec28b81c9a1ae66e82e37ff81ad9fdb40d2d2f45d67638cd6a01->enter($__internal_35599311fc73ec28b81c9a1ae66e82e37ff81ad9fdb40d2d2f45d67638cd6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_35599311fc73ec28b81c9a1ae66e82e37ff81ad9fdb40d2d2f45d67638cd6a01->leave($__internal_35599311fc73ec28b81c9a1ae66e82e37ff81ad9fdb40d2d2f45d67638cd6a01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
