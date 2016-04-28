<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_11d8e63dcd5465d5297b89ed9592823a9d74a1ee1651fea55f9254070c72f8a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_44116dc9ee049466f3ca1d08f7008f143b9f847721ed11f5eb8c4e5e2eeeea1d = $this->env->getExtension("native_profiler");
        $__internal_44116dc9ee049466f3ca1d08f7008f143b9f847721ed11f5eb8c4e5e2eeeea1d->enter($__internal_44116dc9ee049466f3ca1d08f7008f143b9f847721ed11f5eb8c4e5e2eeeea1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44116dc9ee049466f3ca1d08f7008f143b9f847721ed11f5eb8c4e5e2eeeea1d->leave($__internal_44116dc9ee049466f3ca1d08f7008f143b9f847721ed11f5eb8c4e5e2eeeea1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c31b869682d1f7ffaaa7db6fd3bbeb017d16442f549a9c806b52a86c41141de1 = $this->env->getExtension("native_profiler");
        $__internal_c31b869682d1f7ffaaa7db6fd3bbeb017d16442f549a9c806b52a86c41141de1->enter($__internal_c31b869682d1f7ffaaa7db6fd3bbeb017d16442f549a9c806b52a86c41141de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c31b869682d1f7ffaaa7db6fd3bbeb017d16442f549a9c806b52a86c41141de1->leave($__internal_c31b869682d1f7ffaaa7db6fd3bbeb017d16442f549a9c806b52a86c41141de1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46445c33b93d8d50e82420fc29bc934441520b11e0650355492568f6c1e60cef = $this->env->getExtension("native_profiler");
        $__internal_46445c33b93d8d50e82420fc29bc934441520b11e0650355492568f6c1e60cef->enter($__internal_46445c33b93d8d50e82420fc29bc934441520b11e0650355492568f6c1e60cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46445c33b93d8d50e82420fc29bc934441520b11e0650355492568f6c1e60cef->leave($__internal_46445c33b93d8d50e82420fc29bc934441520b11e0650355492568f6c1e60cef_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_489be7ccc69baec4bff52be69fc205988ead0e82c0dfc51f69352d2ed0b7b69a = $this->env->getExtension("native_profiler");
        $__internal_489be7ccc69baec4bff52be69fc205988ead0e82c0dfc51f69352d2ed0b7b69a->enter($__internal_489be7ccc69baec4bff52be69fc205988ead0e82c0dfc51f69352d2ed0b7b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_489be7ccc69baec4bff52be69fc205988ead0e82c0dfc51f69352d2ed0b7b69a->leave($__internal_489be7ccc69baec4bff52be69fc205988ead0e82c0dfc51f69352d2ed0b7b69a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
