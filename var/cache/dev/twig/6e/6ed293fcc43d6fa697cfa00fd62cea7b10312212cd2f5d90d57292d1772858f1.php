<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_1d0c2c1215cd238dc9403432adf7b42ea0e7e45bf537689a916bd07b8f3e0f86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27861dbca39c0b30590e01e7e144b63af509089aad682757f6b7f3b8b28fd807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27861dbca39c0b30590e01e7e144b63af509089aad682757f6b7f3b8b28fd807->enter($__internal_27861dbca39c0b30590e01e7e144b63af509089aad682757f6b7f3b8b28fd807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_3a30ccd1fdedda323a4c94b65961cacf82ee14602d54e1665d34a69db08c25b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a30ccd1fdedda323a4c94b65961cacf82ee14602d54e1665d34a69db08c25b3->enter($__internal_3a30ccd1fdedda323a4c94b65961cacf82ee14602d54e1665d34a69db08c25b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27861dbca39c0b30590e01e7e144b63af509089aad682757f6b7f3b8b28fd807->leave($__internal_27861dbca39c0b30590e01e7e144b63af509089aad682757f6b7f3b8b28fd807_prof);

        
        $__internal_3a30ccd1fdedda323a4c94b65961cacf82ee14602d54e1665d34a69db08c25b3->leave($__internal_3a30ccd1fdedda323a4c94b65961cacf82ee14602d54e1665d34a69db08c25b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7ec6bb7bf5960ec69cf1b0397ffba73b6600ebab8267bee29188d2cd22d658c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ec6bb7bf5960ec69cf1b0397ffba73b6600ebab8267bee29188d2cd22d658c->enter($__internal_f7ec6bb7bf5960ec69cf1b0397ffba73b6600ebab8267bee29188d2cd22d658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40f45f6cbeae5698aa80734ddc1e55206f6c708e629e878f91a101c7f720451f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f45f6cbeae5698aa80734ddc1e55206f6c708e629e878f91a101c7f720451f->enter($__internal_40f45f6cbeae5698aa80734ddc1e55206f6c708e629e878f91a101c7f720451f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table class=\"table table-striped table-hover table-sm table-bordered\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"text-center\">Starred</th>
\t\t\t<th>Favicon</th>
\t\t\t<th>Path</th>
\t\t\t<th>Version</th>
\t\t\t<th>Link</th>
\t\t\t<th>Operations</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["symfonies"]) ? $context["symfonies"] : $this->getContext($context, "symfonies")));
        foreach ($context['_seq'] as $context["_key"] => $context["symfony"]) {
            // line 17
            echo "\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t<a href=\"#\" data-id=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
            echo "\" class=\"fa fa-star";
            echo (($this->getAttribute($context["symfony"], "starred", array())) ? (" text-warning") : ("-o"));
            echo " starControl\" aria-hidden=\"true\"></a>
\t\t\t\t</th>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t";
            // line 22
            if (($this->getAttribute($context["symfony"], "ip", array()) && $this->getAttribute($context["symfony"], "port", array()))) {
                // line 23
                echo "\t\t\t\t\t\t<img src=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "ip", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "port", array()), "html", null, true);
                echo "/favicon.ico\" alt=\"\" width=\"16\">
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t--
\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t</td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "path", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "version", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"colLink\">
\t\t\t\t\t";
            // line 31
            if (($this->getAttribute($context["symfony"], "ip", array()) && $this->getAttribute($context["symfony"], "port", array()))) {
                // line 32
                echo "\t\t\t\t\t\t<a href=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "ip", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "port", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "entryPoint", array()), "html", null, true);
                echo "\">http://";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "ip", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "port", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "entryPoint", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t<span class=\"text-danger\">Stopped</span>
\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 38
            if (($this->getAttribute($context["symfony"], "ip", array()) && $this->getAttribute($context["symfony"], "port", array()))) {
                // line 39
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stop", array("symfony" => $this->getAttribute($context["symfony"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-sm swalContinue\">Stop</a>
\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalSymfony";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">Start</a>

\t\t\t\t\t\t<div class=\"modal fade\" id=\"modalSymfony";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalSymfony";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "Label\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalSymfony";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "Label\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "path", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form action=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start", array("symfony" => $this->getAttribute($context["symfony"], "id", array()))), "html", null, true);
                echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ip";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">IP</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ip";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" name=\"ip\" placeholder=\"IP\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#ip";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" data-val=\"127.0.0.1\">Set to 127.0.0.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"port";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">Port</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"port";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" name=\"port\" placeholder=\"Port\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#port";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" data-val=\"8000\">Set to 8000</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"entry";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\">Entry point</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"entry";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["symfony"], "id", array()), "html", null, true);
                echo "\" name=\"entry\" placeholder=\"Entry point\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 78
            echo "
\t\t\t\t\t<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("symfony" => $this->getAttribute($context["symfony"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm swalContinue\">Delete</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['symfony'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_40f45f6cbeae5698aa80734ddc1e55206f6c708e629e878f91a101c7f720451f->leave($__internal_40f45f6cbeae5698aa80734ddc1e55206f6c708e629e878f91a101c7f720451f_prof);

        
        $__internal_f7ec6bb7bf5960ec69cf1b0397ffba73b6600ebab8267bee29188d2cd22d658c->leave($__internal_f7ec6bb7bf5960ec69cf1b0397ffba73b6600ebab8267bee29188d2cd22d658c_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_340110a0e4036a93b16c9b8d7f52206225ce29000ea7e22bca67a5c7b6fa9470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340110a0e4036a93b16c9b8d7f52206225ce29000ea7e22bca67a5c7b6fa9470->enter($__internal_340110a0e4036a93b16c9b8d7f52206225ce29000ea7e22bca67a5c7b6fa9470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e13b7fad855dae0264f76136d98eb355a7f6348f612bad1122de0834553c7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e13b7fad855dae0264f76136d98eb355a7f6348f612bad1122de0834553c7aa->enter($__internal_4e13b7fad855dae0264f76136d98eb355a7f6348f612bad1122de0834553c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/scripts/app.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4e13b7fad855dae0264f76136d98eb355a7f6348f612bad1122de0834553c7aa->leave($__internal_4e13b7fad855dae0264f76136d98eb355a7f6348f612bad1122de0834553c7aa_prof);

        
        $__internal_340110a0e4036a93b16c9b8d7f52206225ce29000ea7e22bca67a5c7b6fa9470->leave($__internal_340110a0e4036a93b16c9b8d7f52206225ce29000ea7e22bca67a5c7b6fa9470_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 88,  241 => 87,  229 => 83,  219 => 79,  216 => 78,  201 => 66,  197 => 65,  191 => 62,  187 => 61,  183 => 60,  177 => 57,  173 => 56,  169 => 55,  163 => 52,  153 => 47,  144 => 43,  138 => 41,  132 => 39,  130 => 38,  126 => 36,  122 => 34,  108 => 32,  106 => 31,  101 => 29,  97 => 28,  94 => 27,  90 => 25,  82 => 23,  80 => 22,  72 => 19,  68 => 17,  64 => 16,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}
\t<table class=\"table table-striped table-hover table-sm table-bordered\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"text-center\">Starred</th>
\t\t\t<th>Favicon</th>
\t\t\t<th>Path</th>
\t\t\t<th>Version</th>
\t\t\t<th>Link</th>
\t\t\t<th>Operations</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t{% for symfony in symfonies %}
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">
\t\t\t\t\t<a href=\"#\" data-id=\"{{ symfony.id }}\" class=\"fa fa-star{{ symfony.starred ? ' text-warning' : '-o' }} starControl\" aria-hidden=\"true\"></a>
\t\t\t\t</th>
\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t{% if symfony.ip and symfony.port %}
\t\t\t\t\t\t<img src=\"http://{{ symfony.ip }}:{{ symfony.port }}/favicon.ico\" alt=\"\" width=\"16\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t--
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>{{ symfony.path }}</td>
\t\t\t\t<td>{{ symfony.version }}</td>
\t\t\t\t<td class=\"colLink\">
\t\t\t\t\t{% if symfony.ip and symfony.port %}
\t\t\t\t\t\t<a href=\"http://{{ symfony.ip }}:{{ symfony.port }}{{ symfony.entryPoint }}\">http://{{ symfony.ip }}:{{ symfony.port }}{{ symfony.entryPoint }}</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"text-danger\">Stopped</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t{% if symfony.ip and symfony.port %}
\t\t\t\t\t\t<a href=\"{{ path('stop', {'symfony': symfony.id}) }}\" class=\"btn btn-warning btn-sm swalContinue\">Stop</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalSymfony{{ symfony.id }}\">Start</a>

\t\t\t\t\t\t<div class=\"modal fade\" id=\"modalSymfony{{ symfony.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalSymfony{{ symfony.id }}Label\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalSymfony{{ symfony.id }}Label\">{{ symfony.path }}</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<form action=\"{{ path('start', {'symfony': symfony.id}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"ip{{ symfony.id }}\">IP</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"ip{{ symfony.id }}\" name=\"ip\" placeholder=\"IP\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#ip{{ symfony.id }}\" data-val=\"127.0.0.1\">Set to 127.0.0.1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"port{{ symfony.id }}\">Port</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" class=\"form-control\" id=\"port{{ symfony.id }}\" name=\"port\" placeholder=\"Port\" required>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"form-text text-info setDefaultVal\" data-field=\"#port{{ symfony.id }}\" data-val=\"8000\">Set to 8000</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"entry{{ symfony.id }}\">Entry point</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"entry{{ symfony.id }}\" name=\"entry\" placeholder=\"Entry point\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<a href=\"{{ path('delete', {'symfony': symfony.id}) }}\" class=\"btn btn-danger btn-sm swalContinue\">Delete</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('bundles/app/scripts/app.js') }}\"></script>
{% endblock %}
", "AppBundle:Default:index.html.twig", "/home/dsabre/Lavoro/2017/startsymfonyes2/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
