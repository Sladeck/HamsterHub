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
        $__internal_351580bc051f15887eb2b1769583f8b614ed1a176782124a90726af4bbf27946 = $this->env->getExtension("native_profiler");
        $__internal_351580bc051f15887eb2b1769583f8b614ed1a176782124a90726af4bbf27946->enter($__internal_351580bc051f15887eb2b1769583f8b614ed1a176782124a90726af4bbf27946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_351580bc051f15887eb2b1769583f8b614ed1a176782124a90726af4bbf27946->leave($__internal_351580bc051f15887eb2b1769583f8b614ed1a176782124a90726af4bbf27946_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd0418f416ad427f278550a3167743b2280b29cd4abe103ea8dab3439aeddd8b = $this->env->getExtension("native_profiler");
        $__internal_dd0418f416ad427f278550a3167743b2280b29cd4abe103ea8dab3439aeddd8b->enter($__internal_dd0418f416ad427f278550a3167743b2280b29cd4abe103ea8dab3439aeddd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dd0418f416ad427f278550a3167743b2280b29cd4abe103ea8dab3439aeddd8b->leave($__internal_dd0418f416ad427f278550a3167743b2280b29cd4abe103ea8dab3439aeddd8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5204e96e0ac141cece80e5eb3878a5dfa071a451f527bb5d6c84a85411894a7 = $this->env->getExtension("native_profiler");
        $__internal_b5204e96e0ac141cece80e5eb3878a5dfa071a451f527bb5d6c84a85411894a7->enter($__internal_b5204e96e0ac141cece80e5eb3878a5dfa071a451f527bb5d6c84a85411894a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5204e96e0ac141cece80e5eb3878a5dfa071a451f527bb5d6c84a85411894a7->leave($__internal_b5204e96e0ac141cece80e5eb3878a5dfa071a451f527bb5d6c84a85411894a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac7eae3a2dd2c8e4585679598d24026775d31c87c544d5065998ac0765fdc68f = $this->env->getExtension("native_profiler");
        $__internal_ac7eae3a2dd2c8e4585679598d24026775d31c87c544d5065998ac0765fdc68f->enter($__internal_ac7eae3a2dd2c8e4585679598d24026775d31c87c544d5065998ac0765fdc68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ac7eae3a2dd2c8e4585679598d24026775d31c87c544d5065998ac0765fdc68f->leave($__internal_ac7eae3a2dd2c8e4585679598d24026775d31c87c544d5065998ac0765fdc68f_prof);

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
